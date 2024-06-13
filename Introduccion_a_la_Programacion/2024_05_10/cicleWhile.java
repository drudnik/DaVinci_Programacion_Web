import java.util.Scanner;

public class cicleWhile {
    public static void main(String args[]) {
        System.out.print("Введите число: ");
        Scanner sc = new Scanner(System.in);
        int num = sc.nextInt();
        int tempNum = num;
        int contDigs = 0;
        while (num > 0) {
            num = num / 10;
            // num/=10; //Аналогичная запись
            contDigs++;
        }
        System.out.println("El numero " + tempNum + " tiene " + contDigs + " digitos");
    }
}
