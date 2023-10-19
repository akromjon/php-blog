<?php

namespace App\Nova\Dashboards;

use App\Nova\Metrics\NewCategory;
use App\Nova\Metrics\NewPosts;
use App\Nova\Metrics\NewTag;
use App\Nova\Metrics\NewUser;
use Laravel\Nova\Dashboards\Main as Dashboard;

class Main extends Dashboard
{
    /**
     * Get the cards for the dashboard.
     *
     * @return array
     */
    public function cards()
    {
        return [
            new \Tightenco\NovaGoogleAnalytics\PageViewsMetric,
            new \Tightenco\NovaGoogleAnalytics\VisitorsMetric,
            new \Tightenco\NovaGoogleAnalytics\MostVisitedPagesCard,
            new \Tightenco\NovaGoogleAnalytics\ReferrersList,
            new \Tightenco\NovaGoogleAnalytics\OneDayActiveUsersMetric,
            new \Tightenco\NovaGoogleAnalytics\SevenDayActiveUsersMetric,
            new \Tightenco\NovaGoogleAnalytics\FourteenDayActiveUsersMetric,
            new \Tightenco\NovaGoogleAnalytics\TwentyEightDayActiveUsersMetric,
            new \Tightenco\NovaGoogleAnalytics\SessionsMetric,
            new \Tightenco\NovaGoogleAnalytics\SessionDurationMetric,
            new \Tightenco\NovaGoogleAnalytics\SessionsByDeviceMetric,
            new \Tightenco\NovaGoogleAnalytics\SessionsByCountryMetric,
            new NewCategory,
            new NewTag,
            new NewPosts,
            new NewUser,
        ];
    }
}
