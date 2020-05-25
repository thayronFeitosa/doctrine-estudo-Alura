<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__. '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$alunoRepository = $entityManager->getRepository(Aluno::class);

$alunoList = $alunoRepository->findAll();

foreach($alunoList as $aluno){
    echo"ID: {$aluno->getId()} \nNome: {$aluno->getNome()}\n\n"; 
}
//buscando por id
$maria = $alunoRepository->find(4);

echo $maria->getNome() ."\n\n";

//buscando por Nome 

$joao = $alunoRepository->findOneBy([
    'nome'=> 'joao'
]);

echo $joao->getNome(). "\n";