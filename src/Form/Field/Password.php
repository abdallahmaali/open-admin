<?php

namespace OpenAdmin\Admin\Form\Field;

class Password extends Text
{
    public function render()
    {
        $this->prepend('<i class="icon-eye-slash fa-fw"></i>')
            ->defaultAttribute('type', 'password');

        return parent::render();
    }
}
