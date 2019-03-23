<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function __construct()
 	{
		parent::__construct();
		/*
			..:: SOAL ::.. 
			Melakukan Load Model M_web
		*/
		// YOUR CODE HERE

	}
		
	/*
		..:: SOAL ::.. 
		Melakukan pendefinisian array assosiatif $data
		[YOUR_STUDENT_ID (int), YOUR_NAME (str), YOUR_CAMPUS (str)]
	*/
	// YOUR CODE HERE
	public $data = array(
		"nim" => YOUR_STUDENT_ID,
		"nama" => YOUR_NAME,
		"kampus"=> YOUR_CAMPUS
	);

	public function index()
	{
		/*
		..:: SOAL ::.. 
		Melakukan load view page_header, dan page_index
		*/
		// YOUR CODE HERE

	}

	public function mahasiswa()
	{
		/*
		..:: SOAL ::.. 
		Melakukan load method Getmahasiswa_nim from M_web Model.
		Melakukan load view page_header, dan page_mahasiswa, beserta array data hasil Getmahasiswa_nim
		*/
		// YOUR CODE HERE

	}

	public function jurusan()
	{
		/*
		..:: SOAL ::.. 
		Melakukan load method Getjurusan_nim from M_web Model.
		Melakukan load view page_header, dan page_jurusan, beserta array data hasil Getjurusan_nim
		*/
		// YOUR CODE HERE

	}
}
