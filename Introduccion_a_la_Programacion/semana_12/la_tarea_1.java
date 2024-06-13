/*
Pedíalusuarioqueingreseunaseriede10números(unoporuno). Registrar los números en un array.
A continuación, calcular el promedio de los números ingresados (sin incluir el número negativo) y mostrarlo en pantalla, junto con el array.
Desarrollá el diagrama y luego escribí en Java.

Попросите пользователя ввести серию из 10 чисел (по одному за раз). Запишите числа в массив. Затем вычислите среднее значение введённых чисел (не включая отрицательные числа) и отобразите его на экране вместе с массивом. Разработайте диаграмму и затем напишите код на Java.
 */

import java.util.Scanner;

public class la_tarea_1 {
    public static void main(String args[]) {
        Scanner sc = new Scanner(System.in);
        int[] numbers = new int[10];
        int sum = 0;
        int count = 0;

        // Ingreso de números por el usuario
        for (int i = 0; i < 10; i++) {
            System.out.print("Ingrese el número " + (i + 1) + ": ");
            numbers[i] = sc.nextInt();

            if (numbers[i] > 0) {
                sum += numbers[i];
                count++;
            }
        }
        // Cálcular de el promedio
        if (count > 0) {
            double average = (double) sum / count;
            System.out.println("Array de números: ");
            for (int num : numbers) {
                System.out.print(num + " ");
            }
            System.out.println();
            System.out.println("Promedio (sin contar los números negativos): " + average);
        } else {
            System.out.println("No hay números positivos para calcular el promedio.");
        }
        sc.close();
    }
}
