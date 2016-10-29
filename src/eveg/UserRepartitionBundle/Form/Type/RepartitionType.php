<?php
// eveg/UserRepartitionBundle/Form/Type/RepartitionType.php

namespace eveg\UserRepartitionBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class RepartitionType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('synonymType', ChoiceType::class, array(
            'label'    => 'Type de synonyme',
            'choices'  => $this->getSynonymTypes(),
            'required' => false,
            'attr'         => array(
                'class' => 'form-control'
            ),
        ));
        $builder->add('syntaxonBiblioName', TextType::class, array(
            'label'    => 'Nom du syntaxon cité',
            'required' => false,
        ));
        $builder->add('syntaxonBiblioAuthor', TextType::class, array(
            'label'    => 'Nom de l\'autorité',
            'required' => false,
        ));
        $builder->add('biblio', EntityType::class, array(
            'label'        => 'Source bibliographique',
            'class'        => 'evegBiblioBundle:BaseBiblio',
            'choice_label' => 'reference',
            'choices_as_values' => true,
            'required'     => false,
            'attr'         => array(
                'class' => 'form-control biblio'
            ),
        ));
        $builder->add('biblioToAdd', TextType::class, array(
            'label'    => 'Si la source bibliographique n\'est pas disponbile dans le menu déroulant ci-dessus, précisez là ici, elle sera ajoutée pour les prochaines requètes.' ,
            'required' => false,
            'mapped'   => false,
        ));
        $builder->add('selfObservation', CheckboxType::class, array(
            'label'    => 'Observation personnelle',
            'required' => false,
        ));
        $builder->add('comment', TextareaType::class, array(
            'label'    => 'Commentaire',
            'required' => false,
            'attr'         => array(
                'class' => 'form-control'
            ),
        ));
        $builder->add('shape', ChoiceType::class, array(
            'label'    => 'Département',
            'choices'  => $this->getDepFrShapeChoices(),
            'required' => true,
            'attr'         => array(
                'class' => 'form-control biblio'
            ),
        ));
        $builder->add('value', ChoiceType::class, array(
            'label'    => 'Valeur',
            'required' => true,
            'choices'  => $this->getValuesChoices(),
            'attr'         => array(
                'class' => 'form-control biblio'
            ),
        ));
        $builder->add('save', SubmitType::class, array(
            'attr' => array(
                'class' => 'btn btn-primary'
            ),
            'label' => 'Valider'
        ));
        $builder->add('saveAndAdd', SubmitType::class, array(
            'attr' => array(
                'class' => 'btn btn-primary'
            ),
            'label' => 'Valider et ajouter un autre'
        ));

    }

    private function getValuesChoices()
    {
        $values = array(
            "1"  => "Présent",
            "1?" => "Présence à confirmer",
            "2"  => "Douteux",
            "3"  => "Disparu",
            "4"  => "Erreur",
            "4?" => "Erreur àconfirmer",
            "5"  => "Absent",
            "5?" => "Absence à confirmer",
        );

        return $values;
    }
    private function getDepFrShapeChoices()
    {
        $depFrShapeChoices = array(
            "_01" => "[01] Ain",
            "_02" => "[02] Aisne",
            "_03" => "[03] Allier",
            "_04" => "[04] Alpes-de-Haute-Provence",
            "_05" => "[05] Hautes-Alpes",
            "_06" => "[06] Alpes-Maritimes",
            "_07" => "[07] Ardèche",
            "_08" => "[08] Ardennes",
            "_09" => "[09] Ariège",
            "_10" => "[10] Aube",
            "_11" => "[11] Aude",
            "_12" => "[12] Aveyron",
            "_13" => "[13] Bouches-du-Rhône",
            "_14" => "[14] Calvados",
            "_15" => "[15] Cantal",
            "_16" => "[16] Charente",
            "_17" => "[17] Charente-Maritime",
            "_18" => "[18] Cher",
            "_19" => "[19] Corrèze",
            "_2a" => "[2a] Haute-Corse",
            "_2b" => "[2b] Corse-du-Sud",
            "_21" => "[21] Côte-d'Or",
            "_22" => "[22] Côtes d'Armor",
            "_23" => "[23] Creuse",
            "_24" => "[24] Dordogne",
            "_25" => "[25] Doubs",
            "_26" => "[26] Drôme",
            "_27" => "[27] Eure",
            "_28" => "[28] Eure-et-Loir",
            "_29" => "[29] Finistère",
            "_30" => "[30] Gard",
            "_31" => "[31] Haute-Garonne",
            "_32" => "[32] Gers",
            "_33" => "[33] Gironde",
            "_34" => "[34] Hérault",
            "_35" => "[35] Ille-et-Vilaine",
            "_36" => "[36] Indre",
            "_37" => "[37] Indre-et-Loire",
            "_38" => "[38] Isère",
            "_39" => "[39] Jura",
            "_40" => "[40] Landes",
            "_41" => "[41] Loir-et-Cher",
            "_42" => "[42] Loire",
            "_43" => "[43] Haute-Loire",
            "_44" => "[44] Loire-Atlantique",
            "_45" => "[45] Loiret",
            "_46" => "[46] Lot",
            "_47" => "[47] Lot-et-Garonne",
            "_48" => "[48] Lozère",
            "_49" => "[49] Maine-et-Loire",
            "_50" => "[50] Manche",
            "_51" => "[51] Marne",
            "_52" => "[52] Haute-Marne",
            "_53" => "[53] Mayenne",
            "_54" => "[54] Meurthe-et-Moselle",
            "_55" => "[55] Meuse",
            "_56" => "[56] Morbihan",
            "_57" => "[57] Moselle",
            "_58" => "[58] Nièvre",
            "_59" => "[59] Nord",
            "_60" => "[60] Oise",
            "_61" => "[61] Orne",
            "_62" => "[62] Pas-de-Calais",
            "_63" => "[63] Puy-de-Dôme",
            "_64" => "[64] Pyrénées-Atlantiques",
            "_65" => "[65] Hautes-Pyrénées",
            "_66" => "[66] Pyrénées orientales",
            "_67" => "[67] Bas-Rhin",
            "_68" => "[68] Haut-Rhin",
            "_69" => "[69] Rhône",
            "_70" => "[70] Haute-Saône",
            "_71" => "[71] Saône-et-Loire",
            "_72" => "[72] Sarthe",
            "_73" => "[73] Savoie",
            "_74" => "[74] Haute-Savoie",
            "_75" => "[75] Paris",
            "_76" => "[76] Seine-Maritime",
            "_77" => "[77] Seine-et-Marne",
            "_78" => "[78] Yvelines",
            "_79" => "[79] Deux-Sèvres",
            "_80" => "[80] Somme",
            "_81" => "[81] Tarn",
            "_82" => "[82] Tarn-et-Garonne",
            "_83" => "[83] Var",
            "_84" => "[84] Vaucluse",
            "_85" => "[85] Vendée",
            "_86" => "[86] Vienne",
            "_87" => "[87] Haute-Vienne",
            "_88" => "[88] Vosges",
            "_89" => "[89] Yonne",
            "_90" => "[90] Terr. de Belfort",
            "_91" => "[91] Essonne",
            "_92" => "[92] Hauts-de-Seine",
            "_93" => "[93] Seine-Saint-Denis",
            "_94" => "[94] Val-de-Marne",
            "_95" => "[95] Val-d'Oise",
        );

        return $depFrShapeChoices;
    }

    private function getSynonymTypes()
    {
        $synonymTypes = array(
            null         => "",
            "syn incl"   => "[syn incl] le synonyme est inclus en totalité dans l'unité retenue, mais ne la recouvre qu'en partie",
            "syn ="      => "[syn =] le synonyme est équivalent à l'unité retenue [en général synonyme postérieur]",
            "syn = ?"    => "[syn = ?] le synonyme est probablement équivalent à l'unité retenue [à vérifier]",
            "syn illeg"  => "[syn illeg] le synonyme est illégitime car le nom a déjà été utilisé antérieurement pour une autre signification",
            "syn pp"     => "[syn pp] le synonyme est inclut en partie dans l'unité retenue, il doit donc normalement exister des autres parties du synonyme dans la base",
            "syn pmaxp"  => "[syn pmaxp] le synonyme est inclut en majeure partie dans l'unité retenue",
            "syn pminp"  => "[syn pminp] le synonyme est inclut en mineure partie dans l'unité retenue",
            "syn compl"  => "[syn compl] le synonyme est complexe, synusialement ou classiquement, ses unités sont donc à répartir [pp], ou bien le synonyme est à supprimer complètement [trop complexe et obscur]",
            "syn ambig"  => "[syn ambig] le nom du synonyme créé une confusion",
            "syn non"    => "[syn non] le pseudosynonyme n'en est pas un, il s'agit d'une unité différente",
            "syn inval"  => "[syn inval] synonyme invalide",
            "syn mscr"   => "[syn mscr] le synonyme est un manuscrit",
            "syn ined"   => "[syn ined] le synonyme n'a pas été publié",
            "syn nn"     => "[syn nn] le synonyme est un nomen nudum",
            "syn fantom" => "[syn fantom] le nom mentionné par les auteurs n'existe pas dans la référence citée",
            "corr."      => "[corr.] correxit (correction en cas d'erreur d'identification)"
        );

        return $synonymTypes;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'eveg\UserRepartitionBundle\Entity\Repartition',
            'choice_translation_domain' => true,
        ));
    }

    public function getName()
    {
        return 'Repartition';
    }
}