<?php
// src/eveg/AppBundle/Controller/RepartitionFilterController.php

namespace eveg\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Session\Session;

class RepartitionFilterController extends Controller
{
		public function depFrFilterAction(Request $request) {

		$session = new Session();
		$serializer = $this->get('jms_serializer');

		$depFrTable = Array();
		$depFrTable['_01'] = $request->get('_01');
		$depFrTable['_02'] = $request->get('_02');
		$depFrTable['_03'] = $request->get('_03');
		$depFrTable['_04'] = $request->get('_04');
		$depFrTable['_05'] = $request->get('_05');
		$depFrTable['_06'] = $request->get('_06');
		$depFrTable['_07'] = $request->get('_07');
		$depFrTable['_08'] = $request->get('_08');
		$depFrTable['_09'] = $request->get('_09');
		$depFrTable['_10'] = $request->get('_10');
		$depFrTable['_11'] = $request->get('_11');
		$depFrTable['_12'] = $request->get('_12');
		$depFrTable['_13'] = $request->get('_13');
		$depFrTable['_14'] = $request->get('_14');
		$depFrTable['_15'] = $request->get('_15');
		$depFrTable['_16'] = $request->get('_16');
		$depFrTable['_17'] = $request->get('_17');
		$depFrTable['_18'] = $request->get('_18');
		$depFrTable['_19'] = $request->get('_19');
		$depFrTable['_20'] = $request->get('_20');
		$depFrTable['_21'] = $request->get('_21');
		$depFrTable['_22'] = $request->get('_22');
		$depFrTable['_23'] = $request->get('_23');
		$depFrTable['_24'] = $request->get('_24');
		$depFrTable['_25'] = $request->get('_25');
		$depFrTable['_26'] = $request->get('_26');
		$depFrTable['_27'] = $request->get('_27');
		$depFrTable['_28'] = $request->get('_28');
		$depFrTable['_29'] = $request->get('_29');
		$depFrTable['_30'] = $request->get('_30');
		$depFrTable['_31'] = $request->get('_31');
		$depFrTable['_32'] = $request->get('_32');
		$depFrTable['_33'] = $request->get('_33');
		$depFrTable['_34'] = $request->get('_34');
		$depFrTable['_35'] = $request->get('_35');
		$depFrTable['_36'] = $request->get('_36');
		$depFrTable['_37'] = $request->get('_37');
		$depFrTable['_38'] = $request->get('_38');
		$depFrTable['_39'] = $request->get('_39');
		$depFrTable['_40'] = $request->get('_40');
		$depFrTable['_41'] = $request->get('_41');
		$depFrTable['_42'] = $request->get('_42');
		$depFrTable['_43'] = $request->get('_43');
		$depFrTable['_44'] = $request->get('_44');
		$depFrTable['_45'] = $request->get('_45');
		$depFrTable['_46'] = $request->get('_46');
		$depFrTable['_47'] = $request->get('_47');
		$depFrTable['_48'] = $request->get('_48');
		$depFrTable['_49'] = $request->get('_49');
		$depFrTable['_50'] = $request->get('_50');
		$depFrTable['_51'] = $request->get('_51');
		$depFrTable['_52'] = $request->get('_52');
		$depFrTable['_53'] = $request->get('_53');
		$depFrTable['_54'] = $request->get('_54');
		$depFrTable['_55'] = $request->get('_55');
		$depFrTable['_56'] = $request->get('_56');
		$depFrTable['_57'] = $request->get('_57');
		$depFrTable['_58'] = $request->get('_58');
		$depFrTable['_59'] = $request->get('_59');
		$depFrTable['_60'] = $request->get('_60');
		$depFrTable['_61'] = $request->get('_61');
		$depFrTable['_62'] = $request->get('_62');
		$depFrTable['_63'] = $request->get('_63');
		$depFrTable['_64'] = $request->get('_64');
		$depFrTable['_65'] = $request->get('_65');
		$depFrTable['_66'] = $request->get('_66');
		$depFrTable['_67'] = $request->get('_67');
		$depFrTable['_68'] = $request->get('_68');
		$depFrTable['_69'] = $request->get('_69');
		$depFrTable['_70'] = $request->get('_70');
		$depFrTable['_71'] = $request->get('_71');
		$depFrTable['_72'] = $request->get('_72');
		$depFrTable['_73'] = $request->get('_73');
		$depFrTable['_74'] = $request->get('_74');
		$depFrTable['_75'] = $request->get('_75');
		$depFrTable['_76'] = $request->get('_76');
		$depFrTable['_77'] = $request->get('_77');
		$depFrTable['_78'] = $request->get('_78');
		$depFrTable['_79'] = $request->get('_79');
		$depFrTable['_80'] = $request->get('_80');
		$depFrTable['_81'] = $request->get('_81');
		$depFrTable['_82'] = $request->get('_82');
		$depFrTable['_83'] = $request->get('_83');
		$depFrTable['_84'] = $request->get('_84');
		$depFrTable['_85'] = $request->get('_85');
		$depFrTable['_86'] = $request->get('_86');
		$depFrTable['_87'] = $request->get('_87');
		$depFrTable['_88'] = $request->get('_88');
		$depFrTable['_89'] = $request->get('_89');
		$depFrTable['_90'] = $request->get('_90');
		$depFrTable['_91'] = $request->get('_91');
		$depFrTable['_92'] = $request->get('_92');
		$depFrTable['_93'] = $request->get('_93');
		$depFrTable['_94'] = $request->get('_94');
		$depFrTable['_95'] = $request->get('_95');

		$depFrTableJson = $serializer->serialize($depFrTable, 'json');

		// department filter in the SF2 session bag
			// for js, a json variable is usefull
			$session->set('depFrFilter', $depFrTableJson);
			// and for php (repository actions), we duplicate it as an array
			$session->set('depFrFilterArray', $depFrTable);

		$this->get('session')->getFlashBag()->add(
		            'info',
		            'Le filtre par département a été modifié'
		        );

		return $this->redirect($this->generateUrl('eveg_app_homepage'));

	}
}