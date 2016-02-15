<?php class File extends CI_Model {

public function __construct()
    {
        // Call the Model constructor
        parent::__construct();

		
    }



public function path(){$path = "/uploads"; return $path;}

public function is_recursively_deleteable($d) {
    $stack = array($d);
    while($dir = array_pop($stack)) {
        if(!is_readable($dir) || !is_writable($dir)) {
            $type = "file";
            return $type;
        }
        $files = array_diff(scandir($dir), array('.','..'));
        foreach($files as $file) if(is_dir($file)) {
            $stack[] = "$dir/$file";
        }
    }
    $type = "dir";
    return $type;
}

public function go_home(){

$home = $_SERVER["DOCUMENT_ROOT"].$this->path();
$file = $home;
if (is_dir($file)) {
        $directory = $file;
        $result = array();
        $files = array_diff(scandir($directory), array('.','..'));
        foreach($files as $entry) if($entry !== basename(__FILE__)) {
            $i = $directory . '/' . $entry;
            $stat = stat($i);
            $result[] = array(
                'mtime' => $stat['mtime'],
                'size' => $stat['size'],
                'Filename' => basename($i),
                'path' => preg_replace('@^\./@', '', $i),
                'Filetype' => is_dir($i),
                'is_deleteable' => (!is_dir($i) && is_writable($directory)) || 
                                   (is_dir($i) && is_writable($directory) && $this->is_recursively_deleteable($i)),
                'read' => is_readable($i),
                'writ' => is_writable($i),
                'exec' => is_executable($i),
            );
        }
    } else {
        err(412,"Not a Directory");
    }
    echo json_encode(array('files' =>$result));
    exit;
    //return $files;

}

public function go_home2(){


$home = $_SERVER["DOCUMENT_ROOT"].$this->path();
$from = $home;
if(! is_dir($from))
        return false;
    
    $files = array();
    $dirs = array( $from);
    while( NULL !== ($dir = array_pop( $dirs)))
    {
        if( $dh = opendir($dir))
        {
            while( false !== ($file = readdir($dh)))
            {
                if( $file == '.' || $file == '..')
                    continue;
                $path = $dir . '/' . $file;
                if( is_dir($path))
                    $dirs[] = $path;
                else
                    $files[] = $path;
            }
            closedir($dh);
        }
    }
    echo json_encode(array('files' => $files));
    exit;
    //return $files;

}


    public function filelist()
 {
$filespath = $this->path();
$home = $_SERVER["DOCUMENT_ROOT"];
$fileroot = $home.$filespath;
return $fileroot;

    }


    
    
    
  //END CLASS  
}
	?>