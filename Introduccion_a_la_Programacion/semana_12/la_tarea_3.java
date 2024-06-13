/*
Serealizaunaencuestaa15personassobrelacalificación(de1a5) que le dan a dos productos A y B que compiten en el mercado.
Registrar las calificaciones de A y B en dos arrays (generar las calificaciones aleatoriamente), y a continuación determinar cuál es el producto que tiene más preferencia por la gente en base a los promedios. Imprimir por pantalla los resultados.
Ejemplo:
Datos: A = {2,1,5,.....,2} y B = {4,3,5,.....,3}
Salida: “El promedio de A es 20.3 y el de B es 24.7.
A es el producto preferido por la gente”

Проведите опрос 15 человек по оценке (от 1 до 5), которую они дают двум конкурирующим на рынке продуктам A и B. Запишите оценки для A и B в два массива (сгенерируйте оценки случайным образом), а затем определите, какой продукт более предпочтителен среди людей на основе средних значений. Выведите результаты на экран.
Пример:
Данные: A = {2,1,5,...,2} и B = {4,3,5,...,3}
Выход: «Средняя оценка для A составляет 20,3, а для B — 24,7. A является предпочтительным продуктом среди людей»
* */


import java.util.Random;

public class la_tarea_3 {
    public static void main(String[] args) {
        int[] productA = new int[15];
        int[] productB = new int[15];
        Random random = new Random();

        // Генерация случайных оценок для продуктов A и B
        for (int i = 0; i < 15; i++) {
            productA[i] = random.nextInt(5) + 1;
            productB[i] = random.nextInt(5) + 1;
        }

        // Вычисление среднего значения для продуктов A и B
        double sumA = 0;
        double sumB = 0;
        for (int i = 0; i < 15; i++) {
            sumA += productA[i];
            sumB += productB[i];
        }
        double averageA = sumA / 15;
        double averageB = sumB / 15;

        // Определение предпочтительного продукта
        String preferredProduct;
        if (averageA > averageB) {
            preferredProduct = "A es el producto preferido por la gente";
        } else if (averageA < averageB) {
            preferredProduct = "B es el producto preferido por la gente";
        } else {
            preferredProduct = "Ambos productos son igualmente preferidos por la gente";
        }

        // Вывод результатов
        System.out.println("Datos: A = " + arrayToString(productA) + " y B = " + arrayToString(productB));
        System.out.println("El promedio de A es " + averageA + " y el de B es " + averageB + ".");
        System.out.println(preferredProduct);
    }

    // Метод для преобразования массива в строку
    private static String arrayToString(int[] array) {
        StringBuilder sb = new StringBuilder();
        sb.append("{");
        for (int i = 0; i < array.length; i++) {
            sb.append(array[i]);
            if (i < array.length - 1) {
                sb.append(",");
            }
        }
        sb.append("}");
        return sb.toString();
    }
}
