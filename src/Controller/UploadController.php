<?php

namespace App\Controller;

use App\Services\FileUploader;
use App\Services\Fusion;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UploadController extends AbstractController
{
    /**
     * @Route("/uploadFile", name="uploadFile")
     * @param Request $request
     * @param string $uploadDir
     * @param FileUploader $uploader
     * @return Response
     */
    public function indexUpload(Request $request, string $uploadDir,
                                FileUploader $uploader, LoggerInterface $logger): Response
    {
        $this->denyAccessUnlessGranted('ROLE_GESTIONNAIRE', null, "Vous n'avez pas la permission pour accéder à cette page.");

        $token = $request->get("token");

        if (!$this->isCsrfTokenValid('upload', $token))
        {
            $logger->info("CSRF failure");

            return new Response("Opération non autorisée",  Response::HTTP_BAD_REQUEST,
                ['content-type' => 'text/plain']);
        }

        $files = $request->files->get('csvFileUpload');

        if (empty($files))
        {

            $this->addFlash('notice', 'Aucun fichier n\'a été spécifié');
            return $this->render('/FrontEnd/espace/gestionnaire.html.twig');

        }

        foreach ($files as $file)
        {
            $filetype = $file->getMimeType();
            if (str_contains($filetype, '/csv')){
                $filename = $file->getClientOriginalName();
                $uploader->upload($uploadDir, $file, $filename);
            }
            else {
                return $this->render('/FrontEnd/espace/gestionnaire.html.twig');
            }
        }
        $this->addFlash('notice', 'Fichiers téléchargés');
        return $this->render('/FrontEnd/Fusion/fusion.html.twig');
    }

    /**
     * @Route("/fusion", name="fusion")
     */
    public function fusion(Fusion $fusionServices)
    {
        $this->denyAccessUnlessGranted('ROLE_GESTIONNAIRE', null, "Vous n'avez pas la permission pour accéder à cette page.");

        $fusion = $fusionServices->fusionServices();
        $notAccepted = $fusion[1];
        $fusion = $fusion[0];
        $fichiers = fopen($fusion, 'r');
        $f = 0;
        $g = 0;
        $total = 0;
        if ($fichiers){
            $line = fgetcsv($fichiers, 1000, ",");
            $line = fgetcsv($fichiers, 1000, ",");
            while ($line) {
                if (in_array("France", $line)){
                    $f++;
                } else{
                    $g++;
                }
                $line = fgetcsv($fichiers, 1000, ",");
            }
        }
        fclose($fichiers);
        $total = $f + $g;
        return $this->render('/FrontEnd/Fusion/DownloadFusion/sequentieldl.html.twig', array('f' => $f, 'g' => $g, 'total' => $total, 'notAccepted' => $notAccepted));
    }

    /**
     * @Route("/fusiondl", name="fusiondl")
     */
    public function fusionDL(Fusion $fusionServices){
        $this->denyAccessUnlessGranted('ROLE_GESTIONNAIRE', null, "Vous n'avez pas la permission pour accéder à cette page.");

        $fusion = $fusionServices->fusionServices();
        $fusion = $fusion[0];

        return $this->file($fusion);
    }
}
