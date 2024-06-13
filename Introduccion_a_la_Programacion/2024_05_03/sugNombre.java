import java.util.Scanner;

public class sugNombre {
    public static void main(String args[]) {
        Scanner miScan = new Scanner(System.in);
        String nombre;
        String apellido;
        String color;

        System.out.print("Inicio tu nombre: ");
        nombre = miScan.nextLine();
        System.out.print("Inicio tu apellido: ");
        apellido = miScan.nextLine();
        System.out.print("Inicio tu color favorito: ");
        color = miScan.nextLine();

        String A = nombre.substring(0, 3);
        String B = apellido.substring(0, 3);
        String C = color;
        String D = String.valueOf(nombre.length() + apellido.length());

        String nomberUser = A + B + C + D;
        System.out.println("Nombre de usario sugerido " + nomberUser);


        // int varA = 8;
        // String cad = "hola" + varA;
        // System.out.println("hola" + varA);
    }
}
