<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account\Usage\Record;

use Twilio\Options;
use Twilio\Values;

abstract class LastMonthOptions {
    /**
     * @param string $category The usage category of the UsageRecord resources to
     *                         read
     * @param \DateTime $startDate Only include usage that has occurred on or after
     *                             this date
     * @param \DateTime $endDate Only include usage that occurred on or before this
     *                           date
     * @param bool $includeSubaccounts Whether to include usage from the master
     *                                 account and all its subaccounts
     * @return ReadLastMonthOptions Options builder
     */
    public static function read($category = Values::NONE, $startDate = Values::NONE, $endDate = Values::NONE, $includeSubaccounts = Values::NONE) {
        return new ReadLastMonthOptions($category, $startDate, $endDate, $includeSubaccounts);
    }
}

class ReadLastMonthOptions extends Options {
    /**
     * @param string $category The usage category of the UsageRecord resources to
     *                         read
     * @param \DateTime $startDate Only include usage that has occurred on or after
     *                             this date
     * @param \DateTime $endDate Only include usage that occurred on or before this
     *                           date
     * @param bool $includeSubaccounts Whether to include usage from the master
     *                                 account and all its subaccounts
     */
    public function __construct($category = Values::NONE, $startDate = Values::NONE, $endDate = Values::NONE, $includeSubaccounts = Values::NONE) {
        $this->options['category'] = $category;
        $this->options['startDate'] = $startDate;
        $this->options['endDate'] = $endDate;
        $this->options['includeSubaccounts'] = $includeSubaccounts;
    }

    /**
     * The [usage category](https://www.twilio.com/docs/api/rest/usage-records#usage-categories) of the UsageRecord resources to read. Only UsageRecord resources in the specified category are retrieved.
     *
     * @param string $category The usage category of the UsageRecord resources to
     *                         read
     * @return $this Fluent Builder
     */
    public function setCategory($category) {
        $this->options['category'] = $category;
        return $this;
    }

    /**
     * Only include usage that has occurred on or after this date. Specify the date in GMT and format as `YYYY-MM-DD`. You can also specify offsets from the current date, such as: `-30days`, which will set the start date to be 30 days before the current date.
     *
     * @param \DateTime $startDate Only include usage that has occurred on or after
     *                             this date
     * @return $this Fluent Builder
     */
    public function setStartDate($startDate) {
        $this->options['startDate'] = $startDate;
        return $this;
    }

    /**
     * Only include usage that occurred on or before this date. Specify the date in GMT and format as `YYYY-MM-DD`.  You can also specify offsets from the current date, such as: `+30days`, which will set the end date to 30 days from the current date.
     *
     * @param \DateTime $endDate Only include usage that occurred on or before this
     *                           date
     * @return $this Fluent Builder
     */
    public function setEndDate($endDate) {
        $this->options['endDate'] = $endDate;
        return $this;
    }

    /**
     * Whether to include usage from the master account and all its subaccounts. Can be: `true` (the default) to include usage from the master account and all subaccounts or `false` to retrieve usage from only the specified account.
     *
     * @param bool $includeSubaccounts Whether to include usage from the master
     *                                 account and all its subaccounts
     * @return $this Fluent Builder
     */
    public function setIncludeSubaccounts($includeSubaccounts) {
        $this->options['includeSubaccounts'] = $includeSubaccounts;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Api.V2010.ReadLastMonthOptions ' . implode(' ', $options) . ']';
    }
}