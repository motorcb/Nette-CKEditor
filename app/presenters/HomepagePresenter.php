<?php

use Nette\Application\UI\Form;

/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{

    public function renderDefault()
    {
        $this->template->anyVariable = 'any value';
    }

    protected function createComponentTaskForm()
    {
        $form = new Form();
        
        $form->addTextArea( 'foo', 'Foo' )
                ->controlPrototype->addClass( 'ckedit' );
        $form->addSubmit( 'create', 'Vytvořit' );
        return $form;
    }

}
