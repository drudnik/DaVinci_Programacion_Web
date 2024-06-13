public class tarea {
    public static void main(String args[]) {
        int i;
        for (i = 1; i < 40; i++) {
            if (i % 3 == 0 || i % 4 == 0) {
                System.out.println(i + " - es sean múltiplos de 3 o que sean múltiplos de 4");
            }
        }
    }
}