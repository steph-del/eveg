<?php
// eveg/src/AppBundle/Twig/evegExtension.php

namespace eveg\AppBundle\Twig;

use Symfony\Component\Translation\DataCollectorTranslator;

class evegExtension extends \Twig_Extension
{
	private $translator;

	public function __construct(DataCollectorTranslator $translator)
	{
		$this->translator = $translator;
	}
	public function getFunctions()
	{
		return array(
			new \Twig_SimpleFunction('synonymType', array($this, 'synonymType')),
			new \Twig_SimpleFunction('hocLoco', array($this, 'hocLoco')),
		);
	}

	public function synonymType($string)
	{
		
		$arrayIn = explode(" ", $string);

		$list = array();

		$allTypes = "";

		foreach ($arrayIn as $key => $synonymType) {
			switch($synonymType){
				case 'incl':
					$list[] = "(incl) le synonyme est inclus en totalité dans l'unité retenue, mais ne la recouvre qu'en partie.";
					break;
				case '=':
					$list[] = "(=) le synonyme est équivalent à l'unité retenue [en général synonyme postérieur].";
					break;
				case '=?':
					$list[] = "(=?) le synonyme est probablement équivalent à l'unité retenue [à vérifier].";
					break;
				case 'illeg':
					$list[] = "(illeg) le synonyme est illégitime car le nom a déjà été utilisé antérieurement pour une autre signification.";
					break;
				case 'pp':
					$list[] = "(pp) le synonyme est inclut en partie dans l'unité retenue, il doit donc normalement exister des autres parties du synonyme dans la base";
					break;
				case 'pmaxp':
					$list[] = "(pmaxp) le synonyme est inclut en majeure partie dans l'unité retenue.";
					break;
				case 'pminp':
					$list[] = "(pminp) le synonyme est inclut en mineure partie dans l'unité retenue.";
					break;
				case 'compl':
					$list[] = "(compl) le synonyme est complexe, synusialement ou classiquement, ses unités sont donc à répartir [pp], ou bien le synonyme est à supprimer complètement [trop complexe et obscur].";
					break;
				case 'ambig':
					$list[] = "(ambig) le nom du synonyme créé une confusion.";
					break;
				case 'non':
					$list[] = "(non) le pseudosynonyme n'en est pas un, il s'agit d'une unité différente.";
					break;
				case 'inval':
					$list[] = "(inval) synonyme invalide.";
					break;
				case 'mscr':
					$list[] = "(mscr) le synonyme est un manuscrit.";
					break;
				case 'ined':
					$list[] = "(ined) le synonyme n'a pas été publié.";
					break;
				case 'nn':
					$list[] = "(nn) le synonyme est un nomen nudum.";
					break;
			}				
		}

		foreach ($list as $key => $item) {
			$allTypes = $allTypes . "<li>" . $item . "</li>";
		}

		$patternBegin = '<span class="showTooltip" data-toggle="tooltip" title="<ul>';
		$patternMiddle = '</ul>">';
		$patternEnd = '</span>';

		return($patternBegin . $allTypes . $patternMiddle . '(' .$string . ')' . $patternEnd);
	}

	public function hocLoco($string)
	{
		if(strpos($string, 'hoc loco') !== false) {
			$message = $this->translator->trans('eveg.app.show_one.header.hocloco');
			$patternBegin = '<span class="showTooltip" data-toggle="tooltip" data-placement="bottom" style="border-bottom: 1px dashed #000;" title="'.$message.'">';
			$patternEnd = '</span>';

			return ($patternBegin . $string . $patternEnd);

		}

		return $string;
	}

	public function getName()
	{
		return 'eveg_extension';
	}
}