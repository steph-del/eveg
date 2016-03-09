<?php
// src/eveg/AppBundle/EventListener/ImageUploadListener.php
namespace eveg\AppBundle\EventListener;

use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpKernel\HttpKernel;
use Vich\UploaderBundle\Event\Event;

class ImageUploadListener
{
	protected $uploadHelper;
	protected $imagineDataManager;
	protected $imagineFilterManager;
	protected $imagineCacheManager;

	public function __construct($uploader_helper, $data_manager, $filter_manager, $cache_manager)
        {
            $this->uploadHelper = $uploader_helper;
            $this->imagineDataManager = $data_manager;
            $this->imagineFilterManager = $filter_manager;
            $this->imagineCacheManager = $cache_manager;
        }

    public function onPostUpload(Event $event)
    {
    	if($event->getObject() instanceof SyntaxonPhoto)
    	{
    		// get the uploaded file
	        $uploadedFile = $event->getObject();

	        // get the path of the uploaded file
			$path = $this->uploadHelper->asset($uploadedFile, 'imageFile');

			// retrieve the file as a BinaryInterface
			$image = $this->imagineDataManager->find('thumb', $path);

	    	// Resize
	    		// applyFilter returns BinaryInterface
				$resized = $this->imagineFilterManager->applyFilter($image, 'resized');

				// store the resized image
				$this->imagineCacheManager->store($resized, $path, 'resized');

	    	// Thumb generation
				// applyFilter returns BinaryInterface
				$thumb = $this->imagineFilterManager->applyFilter($image, 'thumb');

				// store the thumb
				$this->imagineCacheManager->store($thumb, $path, 'thumb');
    	}
    	


        
    }
}