import java.util.Scanner;

public class CodigoUsuario {
    public static void main(String args[]) {
        Scanner miScan = new Scanner(System.in);
        String nombre;
        String apellido;
        int edad;

        // Получение данных пользователя
        System.out.println("Ingrese su nombre, apellido y edad: ");
        nombre = miScan.nextLine();
        apellido = miScan.nextLine();
        edad = miScan.nextInt();
        miScan.nextLine(); // очистка буфера после чтения числа

        // Преобразование данных в строки
        String A = String.valueOf(nombre.length());
        String B = String.valueOf(apellido.length());
        String C = String.valueOf(edad);
        String D = String.valueOf(nombre.charAt(0));
        String E = String.valueOf(apellido.charAt(0));

        // Формирование и вывод кода
        String codigo = A + B + C + D + E;
        System.out.println("Su codigo es: " + codigo);
    }
}