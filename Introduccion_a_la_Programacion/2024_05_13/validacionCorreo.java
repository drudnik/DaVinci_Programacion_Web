/*
 Задание:
Verificar el ingreso a una cuenta de correo recibiendo 2 Strings, para ello asumir que las cuentas pueden ser de gmail o yahoo, y que la contraseña previamente fue establecida como "501solS()!"

 Перевод:
 Проверить вход в учетную запись электронной почты, получив 2 строки. Для этого предположить, что учетные записи могут быть gmail или yahoo, а пароль заранее установлен как "501solS()!".
 */

import java.util.Scanner;

public class validacionCorreo {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.println("Введите адрес электронной почты:");
        String email = scanner.nextLine();

        System.out.println("Введите пароль:");
        String password = scanner.nextLine();

        if (email.endsWith("@gmail.com") || email.endsWith("@yahoo.com")) {
            if (password.equals("501solS()!")) {
                System.out.println("Вход выполнен успешно.");
            }
        } else {
            System.out.println("Ошибка входа. Проверьте адрес электронной почты и пароль.");
        }
    }
}