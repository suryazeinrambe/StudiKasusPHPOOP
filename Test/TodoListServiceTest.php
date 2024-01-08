<?php 

require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";

use Entity\TodoList;
use Service\TodoListServiceImpl;
use Repository\TodoListRepositoryImpl;
function testShowTodoList() : void 
{
    $todoListRepository = new TodoListRepositoryImpl();
//    $todoListRepository->todoList[1] = new TodoList("BELAJAR PHP DASAR");
//    $todoListRepository->todoList[1] = new TodoList("BELAJAR PHP OOP");
//    $todoListRepository->todoList[1] = new TodoList("BELAJAR PHP DATABASE");
    $todoListService = new TodoListServiceImpl($todoListRepository);

    $todoListService->showTodoList();
}

function testAddTodoList() : void 
{
    $todoListRepository = new TodoListRepositoryImpl();

//    $todoListService = new TodoListServiceImpl($todoListRepository);
//    $todoListService->addTodoList("BELAJAR PHP DASAR");
//    $todoListService->addTodoList("BELAJAR PHP OOP");
//    $todoListService->addTodoList("BELAJAR PHP DATABASE");

    $todoListService->showTodoList();
}

function testRemoveTodoList() : void 
{
    $todoListRepository = new TodoListRepositoryImpl();

    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListService->addTodoList("BELAJAR PHP DASAR");
    $todoListService->addTodoList("BELAJAR PHP OOP");
    $todoListService->addTodoList("BELAJAR PHP DATABASE");

    $todoListService->showTodoList();
    $todoListService->removeTodoList(1);
    $todoListService->showTodoList();
    $todoListService->removeTodoList(1);
    $todoListService->showTodoList();
    
    $todoListService->removeTodoList(1);
    $todoListService->showTodoList();
    

}



testRemoveTodoList();