<div class="rightPageContainer">
    <div style="overflow: hidden">
        <div style="float: left;">
            <h1 style="float: left; margin-left: 0em; padding-bottom: 0.3em;">
                Downtimes for Service:
                <br/>
                <a  style="font-family: inherit; font-size: inherit; font-weight: inherit; text-decoration: underline; padding-bottom: inherit; "
                    href="index.php?Page_Type=Service&id=<?php echo $params['se']->getId()?>">
                    <?php xecho($params['se']->getServiceType()->getName()) ?> -
                    <?php xecho($params['se']->getHostName())?>
                </a>
            </h1>
        </div>

        <!--  Downtimes -->
        <div class="listContainer">
            <span class="header" style="vertical-align:middle; float: left; padding-top: 0.9em; padding-left: 1em;">All Downtimes (Year-Month-Day Time in UTC)</span>
            <img src="<?php echo \GocContextPath::getPath()?>img/down_arrow.png" class="decoration" />
            <table id="allServiceDowntimesTable" class="table table-striped table-condensed tablesorter">
                <thead>
                    <tr>
                        <th>Description</th>
                        <th>From</th>
                        <th>To</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($params['downtimes'] as $downtime) {
                    ?>
                        <tr>
                            <td>
                                <a style="padding-right: 1em;" href="index.php?Page_Type=Downtime&id=<?php echo $downtime->getId() ?>">
                                    <?php echo $downtime->getDescription() ?>
                                </a>
                            </td>
                            <td style="width: 20%">
                                <?php echo $downtime->getStartDate()->format('Y-m-d H:i'/*$downtime::DATE_FORMAT*/); ?>
                            </td>
                            <td style="width: 20%">
                                <?php echo $downtime->getEndDate()->format('Y-m-d H:i'/*$downtime::DATE_FORMAT*/); ?>
                            </td>
                        </tr>
                    <?php
                    } // end of foreach iterating over downtimes
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<script>
    $(document).ready(function ()
    {
    $("#allServiceDowntimesTable").tablesorter();
    }
    );
</script>
