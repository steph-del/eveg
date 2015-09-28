<?php

namespace eveg\AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use eveg\AppBundle\Entity\SyntaxonCore;
use eveg\AppBundle\Form\SyntaxonCoreType;

/**
 * SyntaxonCore controller.
 *
 */
class SyntaxonCoreController extends Controller
{

    /**
     * Lists all SyntaxonCore entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('evegAppBundle:SyntaxonCore')->findAll();

        return $this->render('evegAppBundle:SyntaxonCore:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new SyntaxonCore entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new SyntaxonCore();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_syntaxon_show', array('id' => $entity->getId())));
        }

        return $this->render('evegAppBundle:SyntaxonCore:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a SyntaxonCore entity.
     *
     * @param SyntaxonCore $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(SyntaxonCore $entity)
    {
        $form = $this->createForm(new SyntaxonCoreType(), $entity, array(
            'action' => $this->generateUrl('admin_syntaxon_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new SyntaxonCore entity.
     *
     */
    public function newAction()
    {
        $entity = new SyntaxonCore();
        $form   = $this->createCreateForm($entity);

        return $this->render('evegAppBundle:SyntaxonCore:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a SyntaxonCore entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('evegAppBundle:SyntaxonCore')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SyntaxonCore entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('evegAppBundle:SyntaxonCore:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing SyntaxonCore entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('evegAppBundle:SyntaxonCore')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SyntaxonCore entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('evegAppBundle:SyntaxonCore:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a SyntaxonCore entity.
    *
    * @param SyntaxonCore $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(SyntaxonCore $entity)
    {
        $form = $this->createForm(new SyntaxonCoreType(), $entity, array(
            'action' => $this->generateUrl('admin_syntaxon_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing SyntaxonCore entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('evegAppBundle:SyntaxonCore')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SyntaxonCore entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_syntaxon_edit', array('id' => $id)));
        }

        return $this->render('evegAppBundle:SyntaxonCore:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a SyntaxonCore entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('evegAppBundle:SyntaxonCore')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find SyntaxonCore entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_syntaxon'));
    }

    /**
     * Creates a form to delete a SyntaxonCore entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_syntaxon_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
