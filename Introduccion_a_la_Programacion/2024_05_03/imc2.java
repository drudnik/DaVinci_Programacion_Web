import java.util.Scanner;

public class imc2 {
    public static void main(String args[]) {
        Scanner miScan = new Scanner(System.in);
        System.out.print("Inicio tu peso: ");
        double peso = miScan.nextDouble();
        System.out.print("Inicio tu altura: ");
        double altura = miScan.nextDouble();

        double imc = peso / Math.pow(altura, 2);
        if (imc < 18.5) {
            System.out.println("Debajo de lo normal");
        } else {
            if (imc < 25) {
                System.out.println("Normal");
            } else {
                if (imc < 30) {
                    System.out.println("Sobrepesso");
                } else {
                    System.out.println("Obsidad");
                }
            }
        }
    }
}
