<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function proses_upload(Request $request){ 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
 
                // upload file
		$file->move($tujuan_upload,$file->getClientOriginalName());
	}
}
