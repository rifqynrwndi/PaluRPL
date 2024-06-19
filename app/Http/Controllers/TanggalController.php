namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\CarbonPeriod;
use Carbon\Carbon;

class DateController extends Controller
{
    public function showForm()
    {
        return view('date-form');
    }

    public function processDates(Request $request)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $dates = $this->getSaturdaysAndSundays($startDate, $endDate);

        return view('date-form', compact('dates'));
    }

    private function getSaturdaysAndSundays($startDate, $endDate)
    {
        $period = CarbonPeriod::create($startDate, $endDate);
        $weekendDates = [];

        foreach ($period as $date) {
            if (in_array($date->dayOfWeek, [Carbon::SATURDAY, Carbon::SUNDAY])) {
                $weekendDates[] = $date->toDateString();
            }
        }

        return $weekendDates;
    }
}
