<?php if ($params && isset($params['job']) && isset($params['proposal'])) {
    $job = $params['job'];
    $proposal = $params['proposal'];
?>

<!-------------------------------- intro -------------------------------------------------------->
<div class="container">
    <h1 style="text-align:center; margin-top:25px;">Review and Complete Job</h1>
</div>
<!-------------------------------- end intro -------------------------------------------------------->




<!-------------------------------- submission -------------------------------------------------------->
<div class="container rounded-corners background-color-gray"
    style="padding-bottom:5px; padding-top:10px; margin-bottom:10px">
    <h2 style="text-align:left; margin-top:25px;">Submission Details</h2>
    <hr style="margin: 1rem 0;" />
    <h3>Summary</h3>
    <p>
        <?php echo $proposal->getSubmissionDescription(); ?>
    </p>
    <hr style="margin: 1rem 0;" />
    <h3>Attachments</h3>
    <p>
        <a href="<?php echo $proposal->getSubmissionAttachment(); ?>" download>
            Download zip file &darr;
        </a>
    </p>
</div>
<!-------------------------------- end submission -------------------------------------------------------->

<!-------------------------------- job -------------------------------------------------------->
<div class="container rounded-corners background-color-gray"
    style="padding-bottom:5px; padding-top:10px; margin-bottom:10px">
    <h2 style="text-align:left; margin-top:25px;">Job</h2>
    <p>
        <a href="/dashboard/client/jobs/id?jobId=<?php echo $job->getId() ?>">
            View job &rarr;
        </a>
    </p>
    <p>
        <a href="/dashboard/client/proposals/id?proposalId=<?php echo $proposal->getId() ?>">
            View proposal &rarr;
        </a>
    </p>
</div>
<!-------------------------------- end job -------------------------------------------------------->


<!-------------------------------- mark complete -------------------------------------------------------->
<div class="container rounded-corners background-color-gray"
    style="padding-bottom:5px; padding-top:10px; margin-bottom:10px">
    <h2 style="text-align:left; margin-top:25px;">Mark Task as Complete</h2>
    <hr style="margin: 1rem 0;" />
    <form>
        <fieldset>
            <label for="commentField">Public review (Comment)</label>
            <textarea required id="commentField"></textarea>

            <label for="ratingField">Rating</label>
            <select id="ratingField">
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
            </select>

            <input class="button-primary" type="submit" value="Mark as complete">
        </fieldset>
    </form>
    <hr />
</div>
<!-------------------------------- end mark complete -------------------------------------------------------->


<?php

} else {
    echo "Job details not found";
}

?>