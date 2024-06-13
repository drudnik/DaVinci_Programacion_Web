public class SportsTeams {
    public static void main(String[] args) {
        String[] equipos = {"Barcelona", "Real Madrid", "Valencia", "Levante"};
        int[] ganados = {5, 7, 2, 8};
        int[] empatados = {2, 0, 6, 2};

        // Вычисление очков для каждой команды
        int[] puntos = new int[equipos.length];
        for (int i = 0; i < equipos.length; i++) {
            puntos[i] = (ganados[i] * 3) + (empatados[i] * 1);
        }

        // Печать результатов
        for (int i = 0; i < equipos.length; i++) {
            System.out.println(equipos[i] + " " + puntos[i] + "pts");
        }
    }
}
