public class ejemplosFor {
    public static void main(String args[]) {
        int i;
        for (i = 0; i < 10; i++) {
            System.out.println("Hola, soy la iteracion: " + i);
        }
        for (int j = 1; j < 50; j++) {
            // Если число является четным, то...
            if (j % 2 == 0) {
                System.out.println(j + " es par");
            }
        }
    }
}
