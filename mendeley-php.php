
<?php
/**
 * Part of the mendeley-php citation style:
 * http://csl.mendeley.com/styles/26261151/HMTL-inline-DOI-link-php-bib
 */
	class Reference {
		/**
	     * 
	     * @var string 
	     */
	    public $title;
	    /**
	     * 
	     * @var string 
	     */
	    public $authors;
	    /**
	     * 
	     * @var string 
	     */
	    public $journal;
	    /**
	     * 
	     * @var string 
	     */
	    public $year;
	    /**
	     * 
	     * @var string 
	     */
	    public $volume;
	    /**
	     * 
	     * @var string 
	     */
	    public $pages;
	    /**
	     * 
	     * @var string 
	     */
	    public $doi;
	    

	    public function __construct($title, $authors, $journal, $year, $volume, $pages, $doi) {
	        $this->title = $title;
	        $this->authors = $authors;
	        $this->journal = $journal;
	        $this->year = $year;
	        $this->volume = $volume;
	        $this->pages = $pages;
	        $this->doi = $doi;
	    }
	}

	function printBib($references) {
		$i = 0;
		foreach ($references as $key => $value) {
			$i = $i + 1;
			echo ('<div class="ref-bib-item">');
			echo('<div class="pageAnchor"><a id="'.$key.'"></a></div>');
			echo ('<span class="ref-bib-number">'.$i.'</span>');
			if ($value->authors != '') {
				echo('<span class="ref-bib-authors">'.$value->authors.'</span>&nbsp;');
			}
			if ($value->title != '') {
				echo('<span class="ref-bib-title">'.$value->title.'</span>.&nbsp;');
			}
			if ($value->journal != '') {
				echo('<span class="ref-bib-journal">'.$value->journal.'</span>&nbsp;');
			}
			if ($value->year != '') {
				echo('<span class="ref-bib-year">'.$value->year.'&nbsp;</span>&nbsp;');
			}
			if ($value->pages != '') {
				echo($value->pages.'&nbsp;');
			}
			if ($value->doi != '') {
				echo('<a class="ref-bib-DOILink" target="_blank" href="'.$value->doi.'">&#8599;</a>');
			}
			echo('</div>');
		}
	}

?>
