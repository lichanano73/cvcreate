<?php
namespace App\Controllers;
use App\Models\Job;
use Respect\Validation\Validator as v;


class JobsController extends BaseController {
    
    public function getAddJobAction($request){
        $responseMessage = null;
        
        if($request->getMethod() == 'POST'){
            
            $datosPOST = $request->getparsedBody();

            $jobValidator = v::key('title', v::stringType()->notEmpty())
                ->key('description', v::stringType()->notEmpty());

            try {

                $jobValidator->assert($datosPOST);
                $datosPOST = $request->getparsedBody();

                $files = $request->getUploadedFiles();
                $logo = $files['logo'];
                

                if($logo->getError() == UPLOAD_ERR_OK){
                    $fileName = $logo->getClientFilename();
                    $logo->moveTo("uploads/$fileName");
                }
                //var_dump($fileName);

                $job = new Job();
                $job->title = $datosPOST['title'];
                $job->description = $datosPOST['description'];
                $job->visible = 1;

                $job->save();
                $responseMessage = 'Guardado con Exito';

            } catch (\Exception $e) {

                $responseMessage = $e->getMessage();
                //var_dump("HOLIS SOY UN ERROR");                
            }
            //var_dump($request->getparsedBody());
        }
        
        return $this->renderHTML('addJob.twig',[
            'responseMessage'=>$responseMessage 
        ]);
    }
}