import java.util.Scanner;

public class la_tarea_2_2024_05_18 {
    public static void main(String args[]) {
        Scanner scanner = new Scanner(System.in);
        System.out.print("Ingresar un numero positivo: ");
        int un_numero = scanner.nextInt();

        if (un_numero > 0) {
            int sum = 0;
            for (int i = 1; i <= un_numero; i++) {
                if (i % 2 != 0) {
                    sum += i;
                    //Tunto para debag!!!
                }
            }
            System.out.println("La suma de todos los numeros impares hasta " + un_numero + " es " + sum);
        } else {
            System.out.println("Error! El numero debe ser positivo.");
        }
        scanner.close();
    }
}
