import java.util.Scanner;

public class arraysIntro {
    public static void main(String args[]) {
        Scanner sc = new Scanner(System.in);
        // BUSCAR UN NOMBRE EN LA LISTA
        boolean encontrado = false;
        String nomAux;

        System.out.println("Ingrese un nombre para buscarlo: ");
        String nomBus = sc.nextLine();

        // Registrar los nombres de 5 alumnos ingresados por usario
        // Usario un for para su recorrido

        String alumnos[] = new String[5]; // se declara un array de String de tamano 5
        for (int pos = 0; pos < alumnos.length; pos++) {
            nomAux = alumnos[pos];
            if (nomAux.equals(nomAux)) {
                encontrado = true;
                System.out.println("Esta en posicion " + pos);
            }
        }
        if (!encontrado) {
            System.out.println(nomBus = " no esta en la lista");
        }
    }
}
