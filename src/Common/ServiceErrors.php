<?php
namespace NS\ABCPApi\Common;

class ServiceErrors {
	private static $errors = array(
		0   => 'Неизвестная ошибка',
		1   => 'Некорректный запрос',
		2   => 'Недостаточно параметров',
		3   => 'Неизвестная операция',
		4   => 'Некорректные параметры',
		13  => 'Неизвестная ошибка',
		102 => 'Ошибка авторизации пользователя',
		103 => 'Недостаточно прав для выполнения данной операции',
		104 => 'Ошибка авторизации сайта',
		201 => 'Ошибка базы данных',
		202 => 'Нарушение уникальности полей',
		301 => 'Объект не найден',
		302 => 'Ошибка инициализации кэша',
		303 => 'Ресурс заблокирован'
	);

	/**
	 * Вовзращает сообщение об ошибке по её коду.
	 *
	 * @param $code
	 * @return string
	 */
	public static function getErrorMessageByCode($code) {
		return array_key_exists($code, self::$errors) ? self::$errors[$code] : self::getErrorMessageByCode(0);
	}
} 