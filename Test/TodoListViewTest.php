<?php 

require_once __DIR__ . '/../Entity/TodoList.php';
require_once __DIR__ . '/../Repository/TodoListRepository.php';
require_once __DIR__ . '/../Service/TodoListService.php';
require_once __DIR__ . '/../View/TodoListView.php';
require_once __DIR__ . '/../Helper/InputHelper.php';


use \Entity\TodoList;
use \Repository\TodoListRepositoryImpl;
use \Service\TodoListServiceImpl;
use \View\TodoListView;


function testViewShowTodoList(): void 
{
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListView = new TodoListView($todoListService);

//    $todoListService->addTodoList("BELAJAR PHP");
//    $todoListService->addTodoList("BELAJAR PHP OOP");
//    $todoListService->addTodoList("BELAJAR PHP DATABASE");
    $todoListView->showTodoList();
}

testViewShowTodoList();