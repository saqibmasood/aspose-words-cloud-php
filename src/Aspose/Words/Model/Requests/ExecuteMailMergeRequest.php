<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ExecuteMailMergeRequest.php">
 *   Copyright (c) 2019 Aspose.Words for Cloud
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */

namespace Aspose\Words\Model\Requests;

/*
 * Request model for executeMailMerge operation.
 */
class ExecuteMailMergeRequest
{
    /*
     * The document name.
     */
    public $name;
	
    /*
     * Mail merge data
     */
    public $data;
	
    /*
     * Original document folder.
     */
    public $folder;
	
    /*
     * Original document storage.
     */
    public $storage;
	
    /*
     * Encoding that will be used to load an HTML (or TXT) document if the encoding is not specified in HTML.
     */
    public $load_encoding;
	
    /*
     * Password for opening an encrypted document.
     */
    public $password;
	
    /*
     * With regions flag.
     */
    public $with_regions;
	
    /*
     * Mail merge data.
     */
    public $mail_merge_data_file;
	
    /*
     * Clean up options.
     */
    public $cleanup;
	
    /*
     * Gets or sets a value indicating whether paragraph with TableStart or.             TableEnd field should be fully included into mail merge region or particular range between TableStart and TableEnd fields.             The default value is true.
     */
    public $use_whole_paragraph_as_region;
	
    /*
     * Result name of the document after the operation. If this parameter is omitted then result of the operation will be saved with autogenerated name.
     */
    public $dest_file_name;
    
	
    /*
     * Initializes a new instance of the ExecuteMailMergeRequest class.
     *  
     * @param string $name The document name.
     * @param string $data Mail merge data
     * @param string $folder Original document folder.
     * @param string $storage Original document storage.
     * @param string $load_encoding Encoding that will be used to load an HTML (or TXT) document if the encoding is not specified in HTML.
     * @param string $password Password for opening an encrypted document.
     * @param bool $with_regions With regions flag.
     * @param string $mail_merge_data_file Mail merge data.
     * @param string $cleanup Clean up options.
     * @param bool $use_whole_paragraph_as_region Gets or sets a value indicating whether paragraph with TableStart or.             TableEnd field should be fully included into mail merge region or particular range between TableStart and TableEnd fields.             The default value is true.
     * @param string $dest_file_name Result name of the document after the operation. If this parameter is omitted then result of the operation will be saved with autogenerated name.
     */
    public function __construct($name, $data = null, $folder = null, $storage = null, $load_encoding = null, $password = null, $with_regions = null, $mail_merge_data_file = null, $cleanup = null, $use_whole_paragraph_as_region = null, $dest_file_name = null)             
    {
        $this->name = $name;
        $this->data = $data;
        $this->folder = $folder;
        $this->storage = $storage;
        $this->load_encoding = $load_encoding;
        $this->password = $password;
        $this->with_regions = $with_regions;
        $this->mail_merge_data_file = $mail_merge_data_file;
        $this->cleanup = $cleanup;
        $this->use_whole_paragraph_as_region = $use_whole_paragraph_as_region;
        $this->dest_file_name = $dest_file_name;
    }

    /*
     * The document name.
     */
    public function get_name()
    {
        return $this->name;
    }

    /*
     * The document name.
     */
    public function set_name($value)
    {
        $this->name = $value;
        return $this;
    }
	
    /*
     * Mail merge data
     */
    public function get_data()
    {
        return $this->data;
    }

    /*
     * Mail merge data
     */
    public function set_data($value)
    {
        $this->data = $value;
        return $this;
    }
	
    /*
     * Original document folder.
     */
    public function get_folder()
    {
        return $this->folder;
    }

    /*
     * Original document folder.
     */
    public function set_folder($value)
    {
        $this->folder = $value;
        return $this;
    }
	
    /*
     * Original document storage.
     */
    public function get_storage()
    {
        return $this->storage;
    }

    /*
     * Original document storage.
     */
    public function set_storage($value)
    {
        $this->storage = $value;
        return $this;
    }
	
    /*
     * Encoding that will be used to load an HTML (or TXT) document if the encoding is not specified in HTML.
     */
    public function get_load_encoding()
    {
        return $this->load_encoding;
    }

    /*
     * Encoding that will be used to load an HTML (or TXT) document if the encoding is not specified in HTML.
     */
    public function set_load_encoding($value)
    {
        $this->load_encoding = $value;
        return $this;
    }
	
    /*
     * Password for opening an encrypted document.
     */
    public function get_password()
    {
        return $this->password;
    }

    /*
     * Password for opening an encrypted document.
     */
    public function set_password($value)
    {
        $this->password = $value;
        return $this;
    }
	
    /*
     * With regions flag.
     */
    public function get_with_regions()
    {
        return $this->with_regions;
    }

    /*
     * With regions flag.
     */
    public function set_with_regions($value)
    {
        $this->with_regions = $value;
        return $this;
    }
	
    /*
     * Mail merge data.
     */
    public function get_mail_merge_data_file()
    {
        return $this->mail_merge_data_file;
    }

    /*
     * Mail merge data.
     */
    public function set_mail_merge_data_file($value)
    {
        $this->mail_merge_data_file = $value;
        return $this;
    }
	
    /*
     * Clean up options.
     */
    public function get_cleanup()
    {
        return $this->cleanup;
    }

    /*
     * Clean up options.
     */
    public function set_cleanup($value)
    {
        $this->cleanup = $value;
        return $this;
    }
	
    /*
     * Gets or sets a value indicating whether paragraph with TableStart or.             TableEnd field should be fully included into mail merge region or particular range between TableStart and TableEnd fields.             The default value is true.
     */
    public function get_use_whole_paragraph_as_region()
    {
        return $this->use_whole_paragraph_as_region;
    }

    /*
     * Gets or sets a value indicating whether paragraph with TableStart or.             TableEnd field should be fully included into mail merge region or particular range between TableStart and TableEnd fields.             The default value is true.
     */
    public function set_use_whole_paragraph_as_region($value)
    {
        $this->use_whole_paragraph_as_region = $value;
        return $this;
    }
	
    /*
     * Result name of the document after the operation. If this parameter is omitted then result of the operation will be saved with autogenerated name.
     */
    public function get_dest_file_name()
    {
        return $this->dest_file_name;
    }

    /*
     * Result name of the document after the operation. If this parameter is omitted then result of the operation will be saved with autogenerated name.
     */
    public function set_dest_file_name($value)
    {
        $this->dest_file_name = $value;
        return $this;
    }
}
}
