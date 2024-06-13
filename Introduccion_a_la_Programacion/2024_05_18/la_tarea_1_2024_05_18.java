import java.util.Scanner;

public class la_tarea_1_2024_05_18 {
    public static void main(String args[]) {
        Scanner scanner = new Scanner(System.in);

        System.out.print("Ingresar un numero de 1 a 9: ");
        int un_numero = scanner.nextInt();

        if (un_numero >= 1 && un_numero <= 9) {
            System.out.println("Tabla de potencias para el numero " + un_numero + ":");
            for (int i = 1; i <= 9; i++) {
                System.out.println(un_numero + "^" + i + " = " + (int) Math.pow(un_numero, i));
            }
        } else {
            System.out.println("Error! El numero debe estar en el rango de 1 a 9.");
        }
        scanner.close();
    }
}
