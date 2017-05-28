<?php

namespace InseadBundle\Form;

use InseadBundle\Repository\ChoicesRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnswerType extends AbstractType
{
    private $idQuestion;
    private $question;

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->idQuestion = $options['idQuestion'];
        $this->question = $options['question'];

        $builder
            ->add('questions', HiddenType::class, array(
                'empty_data' => array($this->question)
            ))
            ->add('choices', EntityType::class, array(
                'class' => 'InseadBundle\Entity\Choices',
                'attr' => array(
                    'class' => 'radio'
                ),
                'query_builder' => function(ChoicesRepository $qr) {
                    return $qr->getChoicesById($this->idQuestion);
                },
                'expanded' => true,
                'multiple' => false

            ));


    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'InseadBundle\Entity\Answer',
            'idQuestion' => null,
            'question' => 'InseadBundle\Entity\Question'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'inseadbundle_answer';
    }


}
