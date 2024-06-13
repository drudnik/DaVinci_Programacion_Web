import java.util.Scanner;

public class caraOCruz {
    public static void main(String args[]) {
        Scanner miScan = new Scanner(System.in);
        System.out.print("Inicio user Choise: ");
        int userChoise = miScan.nextInt();
        int coin = (int) (Math.random() * 2);
        boolean band = userChoise == coin;
        if (band == true) {
            System.out.println("Ganaste");
        } else {
            System.out.println("Perdiste");
        }
    }
}
