import java.util.Random;

public class letrasyNums {
    public static void main(String args[]) {
        Random r = new Random();

        String nums = "";
        String letras = "";
        while (letras.length() < 10 & nums.length() < 10) {
            int x = r.nextInt(255) + 1;
            char c = (char) x;
            if (c >= '1' & c <= '9') {

                nums = nums + c;
            } else if (c >= 'a' & c < 'z') {
                letras = letras + c;
            }
        }
        System.out.println("Los string quedaron: ");
        System.out.println("Nums: " + nums);
        System.out.println("Letras: " + letras);

    }
}