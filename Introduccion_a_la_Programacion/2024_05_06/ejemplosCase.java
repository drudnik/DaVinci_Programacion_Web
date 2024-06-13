import java.util.Scanner;

public class ejemplosCase {
    public static void main(String args[]) {
        Scanner sc = new Scanner(System.in);
        double saldo = 78500;
        System.out.println("Hola");
        char opcion = sc.nextLine().charAt(0);
        switch (opcion) {
            case 'a':
                System.out.println("Su saldo es: " + saldo);
                break;
            case 'b':
                System.out.println("Ingresar un momento");
                double monto = sc.nextDouble();
                if (monto <= saldo) {
                    System.out.println("Retira " + monto);
                    // saldo = saldo - monto;
                    saldo -= monto;
                    System.out.println("Su saldo queda: " + saldo);
                } else {
                    System.out.println("Saldo insuficiente");
                }
                break;
            case 'c':
                System.out.println("Cuanto depositas?");
                monto = sc.nextDouble();
                saldo += monto;
                break;
            case 'd':
                System.out.println("Error");
                break;

        }
    }
}
