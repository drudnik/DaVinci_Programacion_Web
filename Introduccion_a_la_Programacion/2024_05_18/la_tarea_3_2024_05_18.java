import java.util.Scanner;

public class la_tarea_3_2024_05_18 {
    public static void main(String args[]) {
        Scanner scanner = new Scanner(System.in);
        System.out.print("Ingresar un numero (no menor que 2): ");
        int n = scanner.nextInt();

        if (n >= 2) {
            System.out.println("Los primeros " + n + " numeros de Fibonacci:");
            int[] fib = new int[n];
            fib[0] = 1;
            fib[1] = 1;
            for (int i = 2; i < n; i++) {
                fib[i] = fib[i - 1] + fib[i - 2];
            }
            for (int num : fib) {
                System.out.print(num + " ");
            }
        } else {
            System.out.println("El numero debe ser no menor que 2.");
        }
        scanner.close();
    }
}