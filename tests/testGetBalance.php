<?php
require __DIR__ . '/../vendor/autoload.php';
use Stelin\OVOID;
$authToken="eyJhbGciOiJODAwMDAwLCJjcmVhdGVUaW1lIjoxNTY4NjE2MDAGa21mNlU0VU9VOEl0QNMk1oaXFyUEo1blZocWF1eTRQN3NFYmJsVmtKTFVFL2FhRGF2Wk9UOXZIYlZNdHdmL0RjSUlWZXRQcnRWKzZRQ0NzVktiQjhKUDRYVzNyUHJvS3IxNHlFd0JSNVEwMkJMM2htOVV1T3pOT2xTMXFsYnJJa0FBT3d1UGIxcEU4dkxyRFF1TTV0QU16Ylp4NjR2NVl6WGU1Z1JCQWoxcG84TDlRS0NnNnZDT2JJelJ0bStpTXFYakovcjk5Z0s0Q1pjT1V4OUtqVG5zaDRacTZMaUVleFJoNzZHTS96VEtDZWtQT2lzZUlpOWZMZENxbS8yOWVnYi9zYWhFUXBWcitWbjgyZzFQM21QUVExZXlDRnh3MUN6NWJaZ3hmRE9MNTZLWGVocHVaaldNTFZmcFVHd1k9In0.WtYVGRs7S9EznSKvLyz8Te5vzRUi4p_4llaqUWzmDNSL68reWd0YHPeQz2CV9YOehqrMR7yHYjlnRUoi2-BHXRIIzDELZwZV1oOEj0ZHLznI_B4RD6zRgDKZcUWvSNo_4QHW4UsWBuZyu6BHQC6DqSWZ3-dmBuHySetYjX5WvhFK5uZ4hAXhkHbnG73Ij3ZggxsOXDmED-mI7-SZkOJtg2SqUijS5Tf1VljjGrBhYqwX34PWEOFLeDhU0bwLLaZQZaHwGAF4eOWiEBgTJkLKDVu2YkPVFNCD-qdoRuMqNyV8dCjBlVMjNJJcU1xfedc3SWjMzHiNKvu4-TAJ7Fcetg";
$ovoid = new OVOID($authToken);
dd($ovoid->getWalletTransaction($page =1));
 ?>