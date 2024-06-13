package semana_12;

import javax.swing.*;

public class create_funcion {
    public static void main(String args[]) {
        int a = 3;
        System.out.println("Esto se imprime desde main");
        miFuncion();
        imprimirSuma(2,3);
        lalala();
    }

    //Funcion que no devuelve ni necesita parametros
    public static void miFuncion() {
        System.out.println("Esto se impime desde mi Funcion");
    }

    public static void imprimirSuma (int A, int B) {
        int x = A;
        int y = B;
        int suma = x + y;
        System.out.println("la suma de " + x + " y " + y + " es: " + suma);
        System.out.printf("la suma de %d y %d es: %d", x, y, suma);
    }

    public static void lalala () {
        JOptionPane.showMessageDialog(null, "Un mensaje de prueba");
        String bStr = JOptionPane.showInputDialog(null, "Ingresar un dato:");
        int b = Integer.parseInt (bStr);
    }
}