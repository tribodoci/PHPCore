  /**
     * Descrição: Intervalo Semanal é uma função simples em php que recebe uma 
     *            data como parâmetro (um objeto date('Y-m-d H:i:s')) e retorna 
     *            uma string com o intervalo daquela semana.
     * Data de criação : 24/07/2013
     * @author Sheldon Led
     * @param date $date - Data, no formato date('Y-m-d H:i:s') ou date('Y-m-d')
     * @return string (Ex: 2013-07-21 00:00:00 AND 2013-07-27 00:00:00)
     */
    private function intervaloSemanal($date){
        $startdate = strtotime($date);
        $enddate = strtotime($date);
        $date = strtotime($date);
        switch (strtolower(date('D', $date))){
            case "sun":
                $startdate = $date;
                $enddate = strtotime('+6 day', $date);
                break;
            case "mon";
                $startdate = strtotime('-1 day', $date);
                $enddate = strtotime('+5 day', $date);
                break;
            case "tue";
                $startdate = strtotime('-2 day', $date);
                $enddate = strtotime('+4 day', $date);
                break;
            case "wed";
                $startdate = strtotime('-3 day', $date);
                $enddate = strtotime('+3 day', $date);
                break;
            case "thu";
                $startdate = strtotime('-4 day', $date);
                $enddate = strtotime('+2 day', $date);
                break;
            case "fri";
                $startdate = strtotime('-5 day', $date);
                $enddate = strtotime('+1 day', $date);
                break;
            case "sat";
                $startdate = strtotime('-6 day', $date);
                $enddate = $date;
                break;
        }
        return date('Y-m-d H:i:s', $startdate)." AND ".date('Y-m-d H:i:s', $enddate);
    }
