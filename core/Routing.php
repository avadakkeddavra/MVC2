<?php
class Routing
{
	static function execute()
	{
		$controllerName = 'Main';
		$actionName = 'index';
		$piecesOfUrl = explode('/', $_SERVER['REQUEST_URI']);

		if (!empty($piecesOfUrl[2]))
		{
			$controllerName = $piecesOfUrl[2];
		}
		if (!empty($piecesOfUrl[3]))
		{
			$actionName = $piecesOfUrl[3];
		}
		$modelName =  $controllerName . 'Model';
		$controllerName =  $controllerName . 'Controller';
		$actionName = $actionName .'Action' ;
		$fileWithModel = $modelName . '.php';
		$fileWithModelPath	= "models/" . $fileWithModel;
		if (file_exists($fileWithModelPath))
		{
			include $fileWithModelPath;
		}
		$fileWithController = $controllerName . '.php';
		$fileWithControllerPath = "controllers/" . $fileWithController;
    //echo $fileWithControllerPath;
		if (file_exists($fileWithControllerPath))
		{
			include $fileWithControllerPath;
		}
		else
		{
			//Здесь нужно добавить обработку ошибки.
			//Например, перекинуть пользователя на страницу 404
		}
		$controller = new $controllerName(str_replace('Controller', '', $controllerName));
		$action = $actionName;
    //echo $action;
		if (method_exists($controller, $action))
		{
			call_user_func(array($controller, $actionName), $piecesOfUrl);
		}
		else
		{
			//Здесь тоже нужно добавить обработку ошибок
		}
	}
}?>
