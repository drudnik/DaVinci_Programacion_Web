import java.util.Scanner;

public class forCont {
    public static void main(String args[]) {
        System.out.print("Введите число: ");
        Scanner sc = new Scanner(System.in);
        int N = sc.nextInt();
        for (int i = 1; i <= 10; i++) {
            System.out.println(N + "x" + 1 + "=" + (N*i));
        }
    }
}