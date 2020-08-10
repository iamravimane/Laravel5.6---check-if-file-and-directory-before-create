<?php
use File;
class FileController extends Controller {

  public function fileupload()
    {
        try
        {
         $filepara['file_id']=$getFiles['data']['response_data_pan']['file_id'];
                $filedata = $this->getFileData( $filepara['file_id']);
                $file = 'datapan.jpeg';
                $destinationPath=public_path('keyDocument/'.$param['contract_id']).'/';
                if (!File::isDirectory($destinationPath))
                {  
                    File::makeDirectory($destinationPath, 0777, true, true);
                    if(!File::exists($destinationPath.$file))
                    {
                        File::put($destinationPath.$file,$filedata);
                    }
                 }
                 else
                 {
                    File::put($destinationPath.$file,$filedata);
                 }
           } catch (\Exception $ex) {
            print($ex->getMessage());
        }
   
   }
   
