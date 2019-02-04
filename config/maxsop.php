<?php

return [
	'circular' => [
		//nature (Emplyoment Status)
		'nature' => ['full-time', 'part-time', 'contractual', 'internship', 'freelance'],

		'level' => ['any', 'entry level', 'mid level', 'top level'],

		'payment-type' => ['daily', 'weekly', 'monthly'],

		'resume-receive-online' => [
			1 => 'receive online',
		],

		'resume-receive-opt' => [
			2 => 'email', 
			3 => 'hard copy', 
			4 => 'walk in interview'
		],
	],

	'icon' => [
		'mime_type' => [
			'default' => 'file.png',
			'application/zip' => 'zip.png',
			'application/octet-stream' => 'docx.png',
			'application/pdf' => 'pdf.png',
			'text/plain' => 'text.png',
			'application/x-dosexec' => 'exe.png',
			'application/x-rar' => 'rar.png',
		],
	],
];