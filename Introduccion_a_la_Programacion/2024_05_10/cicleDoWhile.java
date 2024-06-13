import java.util.Scanner;

public class cicleDoWhile {
    public static void main(String args[]) {

        int edad;
        do {
            System.out.print("Введите возраст: ");
            Scanner sc = new Scanner(System.in);
            edad = sc.nextInt();
        } while (edad < 0 | edad > 120);
        System.out.println("Tu edad es: " + edad);

        char i;
        do {
            System.out.print("Введите имя: ");
            Scanner sc = new Scanner(System.in);
            i = sc.nextLine().charAt(0);
        } while (i < 'A' | (i > 'Z' & i < 'a') | i > 'z');
        System.out.println("Su inicial es: " + i);
    }
}
