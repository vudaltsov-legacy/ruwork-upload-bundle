<?php
declare(strict_types=1);

namespace Ruvents\UploadBundle\Validator;

use Symfony\Component\Validator\Constraints\Composite;

/**
 * @Annotation()
 * @Target({"PROPERTY", "METHOD", "ANNOTATION"})
 */
class AssertUpload extends Composite
{
    public $constraints;

    /**
     * {@inheritdoc}
     */
    public function getRequiredOptions()
    {
        return [
            'constraints',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultOption()
    {
        return 'constraints';
    }

    /**
     * {@inheritdoc}
     */
    protected function getCompositeOption()
    {
        return 'constraints';
    }
}
