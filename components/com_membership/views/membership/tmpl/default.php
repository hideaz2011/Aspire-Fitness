<?php defined('_JEXEC') or die('Restricted access'); 
$app = JFactory::getApplication();
$templateDir = JURI::base() . 'templates/' . $app->getTemplate();
$compAssetsDir = JURI::base()."components/com_membership/assets/";
$js1 = $compAssetsDir."jquery.coda-slider-2.0.js";
$document = & JFactory::getDocument();
$document->addScript($js1);
$js2 = $compAssetsDir."jquery.easing.1.3.js";
$document->addScript($js2);
$js3 = $compAssetsDir."myscript.js";
$document->addScript($js3);
$css = $compAssetsDir."coda-slider-2.0.css";
$document->addStyleSheet($css);
?>
<!--DIV CLASS="span-24 last" ID="mygallarygap">&nbsp;</DIV-->
<DIV CLASS="coda-slider-wrapper"> 
				<!--div id="coda-nav-1" class="coda-nav" style="width: 948px;">
                	<ul style="width: 6px;">
                    	<li class="tab1"><a href="#1" class="current"></a></li>
                        <li class="tab2"><a href="#2" class=""></a></li>
                        <li class="tab3"><a href="#3" class=""></a></li>
                     </ul>
                </div-->
                <DIV id="coda-nav-1" class="coda-nav"> 
                    <UL>
                        <LI CLASS="tab1">
                        <A CLASS="" HREF="#1">Regular
                        Membership</A></LI> 
                        <LI CLASS="tab2">
                        <A CLASS="" HREF="#2">Corporate
                        Membership</A></LI> 
                        <LI CLASS="tab3">
                        <A CLASS="" HREF="#3">Membership
                        Benifits</A></LI> 
                    </UL>
                </DIV>
                <DIV CLASS="coda-slider-second" ID="coda-slider-2"> 
                    <DIV CLASS="panel"> 
                        <DIV CLASS="panel-wrapper"> 
                            <DIV CLASS="span-24" STYLE="height:10px;">&nbsp;</DIV>
                            <DIV CLASS="span-11" STYLE="text-align:left;"><IMG ALT="Aspire Logo"
                                                                               SRC="<?php echo $templateDir; ?>/images/regmember.png" /></DIV>
                            <DIV CLASS="span-12 last"
                                 STYLE="margin-left : 20px;"> 
                                <H4 CLASS="title">Check Our Prices</H4> 

                                <P CLASS="desc-para">It's fast, easy and
                                convenient to check our membership prices
                                at Aspire Fitness. You can check our prices
                                three different ways:</P> 
                                <H3 CLASS="title">Get prices Online</H3> 

                                <P CLASS="desc-para">To check our prices
                                and/or join online, follow these easy steps:</P>
                                

                                <P CLASS="desc-para">On the Get me the
                                Tariffs click and give your required
                                Details andyou will receive it, "Join
                                Online Today"</P> 
                                <H3 CLASS="title">Get Prices Over the Phone</H3>
                                

                                <P CLASS="desc-para">To check our prices
                                and/or join over the phone, call us to
                                044-32965000,111, Mon - Sat: 5 am to 9pm
                                Sun: 7 am to 12 pm.</P> 

                                <P CLASS="desc-para">Note, for Member
                                Services-related calls, please visit our
                                contact us page for information.</P> 
                                <H3 CLASS="title">Get Prices in Person</H3>
                                 <P CLASS="desc-para">To check our prices
                                and/or join in person, just walk in to our
                                fitness centre at any time during our
                                working hours.</P>
                            </DIV>

<!--div class="span-24" style="height:10px;">&nbsp;</div-->
                            <DIV CLASS="span-24 last"> 
                                 

                                
                                <H3 CLASS="title">About Our Club Memberships</H3>
                                

                                <P CLASS="desc-para">Thank you for
                                inquiring about a Aspire Fitness
                                membership. We've dedicated ourselves to
                                helping people like you live life to the
                                fullest.We believe one hour perday in the
                                gym or health club can positively affect
                                the other 23. When you join Aspire Fitness,
                                your membership benefits will include that
                                you can enjoy state-of-the-art equipment,
                                cardio and resistancetraining, high-energy
                                Group exercise classes, and guidance from
                                our staff's of certified personal trainers.
                                We also offer extra health club type
                                amenities such as steam room. It's all on
                                your own terms. All with your own personal
                                fitness goals in mind.</P> 
                                <H3 CLASS="title">Aspire Fitness Information</H3>
                                

                                <P CLASS="desc-para">Start learning about
                                club memberships today. We welcome people
                                of all shapes and sizes - with fitness
                                goals big and small - who want to realize
                                all the benefits of a gym membership.It's
                                time to start getting results on yourterms
                                - with your Aspire Fitness membership.</P> 

                                <P CLASS="desc-para">Contact us today to
                                find our more.</P> 
                            </DIV>
                        </DIV>
                    </DIV>
                    <DIV CLASS="panel preload"> 
                        <DIV CLASS="panel-wrapper"> 
                            <DIV CLASS="span-24" STYLE="height:10px;">&nbsp;</DIV>
                            <DIV CLASS="span-11" STYLE="text-align:left;"><IMG ALT="Corporate Wellness"
                                                                               SRC="<?php echo $templateDir; ?>/images/corpet.png" /><!--img src="images/corporate.jpg" alt="Aspire Logo" /--></DIV>
                            <DIV CLASS="span-12 last"
                                 STYLE="margin-left : 20px;"> 
                                <H4 CLASS="title">Corporate Wellness</H4> 
                                <H3 CLASS="title">Welcome to Aspire
                                Fitness' Corporate Membership Program!</H3> 

                                <P CLASS="desc-para exceptional">At Aspire Fitness, we
                                recognize that there's strength in numbers.
                                Our Corporate Wellness programs makefitness
                                available and more affordable for employees.</P>
                                
                                <H3 CLASS="title">Are u interested in
                                starting a Corporate Wellness Program?</H3> 

                                <P CLASS="desc-para exceptional">Our Corporate Wellness
                                programs will deliver a benefit to your
                                workforce - they can actually help
                                toimprove the bottom line. Provide your
                                employees with a wellness solution that
                                offers them to access our fully loaded of
                                state-of-the-art fitness center.</P> 

                                <P CLASS="desc-para">To get started, visit
                                our club or contact us. Our staff or Member
                                Coordinator will be pleased to meet you &
                                explain the features& benefits for
                                Corporate Membership at your Company.</P> 
                            </DIV>
                        </DIV>
                    </DIV>
                    <DIV CLASS="panel"> 
                        <DIV CLASS="panel-wrapper"> 
                            <DIV CLASS="span-24" STYLE="height:10px;">&nbsp;</DIV>
                            <DIV CLASS="span-11" STYLE="text-align:left;"><IMG ALT="Aspire Logo"
                                                                               SRC="<?php echo $templateDir; ?>/images/member.png" /></DIV>
                            <DIV CLASS="span-12 last"
                                 STYLE="margin-left : 20px;"> 
                                <H4 CLASS="title">Membership Benefits</H4>
                                

                                <P CLASS="desc-para">Joining a health club
                                or gym is a big decision, find out more
                                about how Aspire Fitness membership benefit
                                your life. It's for your goals, your hopes
                                and your dreams. It's for your health, your
                                kids and even your career.Because when you
                                decide to join a health club, or a gym, or
                                whatever you want to call it, you've
                                decided to get more out of your life period.</P>
                                
                                <H3 CLASS="title">Membership Kit</H3>
                                

                                <P CLASS="desc-para">Get the Most Out of
                                Your Aspire Fitness membership.</P> 

                                <P CLASS="desc-para">As a Aspire Fitness
                                member, you're entitled to a host of
                                benefits, including nutritional programs, a
                                Customised Exercise Prescription, exercise
                                suggestions, and more. Spend a few minutes
                                reviewing these benefits below so you don't
                                miss out on any of the advantages of
                                joining Aspire Fitness.</P> 
                                <H3 CLASS="title">Aspire Basics</H3>
                                <P CLASS="desc-para">Maybe it's been a
                                while since you've had a health club or gym<P>
                            </DIV>
                            
                            <DIV CLASS="span-24 last"> 
                            <P CLASS="desc-para">
                                membership. Or maybe you just want to get
                                reacquainted with your options as a member.
                                Fitness basics gives you a refresher course
                                in:</P> 
                                <H3 CLASS="title">Gym do's and
                                don'ts.</H3> 

                                <P CLASS="desc-para">How to get answers to
                                any additional membership questions about
                                what supposed to do or not to</P> 
                                <H3 CLASS="title">Getting Started:
                                My 12-Week Plan</H3> 

                                <P CLASS="desc-para">Get on track to reach
                                your fitness and body composition goals the
                                right way with a comprehensive 12-week plan
                                that's formatted by experts. This plan is
                                based on your personal goals and fitness
                                level to deliver customized results.</P> 
                                <H3 CLASS="title">Your 12-week plan
                                will include:</H3> 

                                <P CLASS="desc-para">Daily calorie targets</P>
                                

                                <P CLASS="desc-para">Daily menu templates</P>
                                

                                <P CLASS="desc-para">Vitamin and supplement
                                recommendations</P> 
                                <H3 CLASS="title">Basic Fitness
                                Exercise</H3> 

                                <P CLASS="desc-para">Get started on the
                                right track, or shake up your current
                                routine with our easy-to-follow
                                instructions and demonstrations. We'll
                                provide you with basic exercises that work
                                each major muscle group.</P> 
                                <H3 CLASS="title">Fitness Workout
                                Tools</H3> 

                                <P CLASS="desc-para">Keeping track of what
                                you're doing at the gym will help you
                                better results. Calorie expenditure & bmi
                                calculator will help and keep you moving
                                towards your goals. These tools will help
                                you get your fitness program off to a good
                                start-or give it a jump-start. When you
                                stick to a regular workout schedule and
                                nutritional program, you can see results in
                                no time!</P> 
                                <H3 CLASS="title">Free 45-Days
                                Nutritional Routine</H3> 

                                <P CLASS="desc-para">It can be hard to eat
                                healthy day in and day out - unless you
                                make a plan. Learn how to reach your
                                fitness goals sooner by putting Nutritious
                                foods in your body.</P> 
                            </DIV>
                        </DIV>
                    </DIV>
                </DIV>

<!--coda-slider-->
            </DIV>