
                        try
                        {
                            var linksArray = '  https://live.primis.tech/content/video/hls/hls.0.12.4_2.min.js  https://live.primis.tech/content/prebid/prebidVid.4.43.0_3.min.js   https://live.primis.tech/live/liveVideo.php?vpaidManager=sekindo&s=58057&ri=6C69766553746174737C736B317B54307D7B64323032312D30372D31325F32327D7B7331353038333837387D7B433135397D7B5361584E7A64585575593239747D7B626368726F6D657D7B716465736B746F707D7B6F77696E646F77737D7B583330307D7B593630307D7B66327D7B4C383435377DFEFE&userIpAddr=203.81.242.206&userUA=Mozilla%2F5.0+%28Windows+NT+10.0%3B+Win64%3B+x64%29+AppleWebKit%2F537.36+%28KHTML%2C+like+Gecko%29+Chrome%2F91.0.4472.124+Safari%2F537.36&debugInformation=&isWePassGdpr=1&noViewableMidrollPolicy=vary&isDoublePreroll=1&autoSkipVideoSec=30&c2pWaitTime=10&csuuid=60da2bf1b403b&debugInfo=15083878_&debugPlayerSession=&pubUrlDEMO=&isAsyncDEMO=0&customPlaylistIdDEMO=&sta=15083878&showLogo=0&clkUrl=&plMult=-1&schedule=eyJwcmVfcm9sbCI6MSwibWlkX3JvbGwiOltdLCJnYXAiOiJhdXRvIn0%3D&content=plembed1817kuirwnoj&secondaryContent=&x=300&y=600&pubUrl=https%3A%2F%2Fissuu.com%2Fsanjaykumarguptaa%2Fdocs%2Fproject-report-on-e-commerce&contentNum=1&flow_closeBtn=0&flowCloseTimeout=0&flow_closeButtonPosition=right&flow_direction=bl&flow_horizontalOffset=10&flow_bottomOffset=100&impGap=1&flow_width=310&flow_height=260&videoType=normal&gdpr=0&gdprConsent=&contentFeedId=&geoLati=28.6542&geoLong=77.2373&vpTemplate=8457&flowMode=below&isRealPreroll=0&playerApiId=&isApp=0&ccpa=0&ccpaConsent='.split(' ');
                            
                            for(var l = 0; l < linksArray.length; l++)
                            {
                                if(linksArray[l].length > 10)
                                {
                                    var sc = document.createElement('script');
                                    sc.src = linksArray[l];
                                    document.head.appendChild(sc);
                                }
                            }
                        }
                        catch(e)
                        {
                            document.write('<script type="text/javascript" src="https://live.primis.tech/content/video/hls/hls.0.12.4_2.min.js">\x3C/script><script type="text/javascript" src="https://live.primis.tech/content/prebid/prebidVid.4.43.0_3.min.js">\x3C/script><script type=' + "'" + 'text/javascript' + "'" + ' language=' + "'" + 'javascript' + "'" + ' src="https://live.primis.tech/live/liveVideo.php?vpaidManager=sekindo&s=58057&ri=6C69766553746174737C736B317B54307D7B64323032312D30372D31325F32327D7B7331353038333837387D7B433135397D7B5361584E7A64585575593239747D7B626368726F6D657D7B716465736B746F707D7B6F77696E646F77737D7B583330307D7B593630307D7B66327D7B4C383435377DFEFE&userIpAddr=203.81.242.206&userUA=Mozilla%2F5.0+%28Windows+NT+10.0%3B+Win64%3B+x64%29+AppleWebKit%2F537.36+%28KHTML%2C+like+Gecko%29+Chrome%2F91.0.4472.124+Safari%2F537.36&debugInformation=&isWePassGdpr=1&noViewableMidrollPolicy=vary&isDoublePreroll=1&autoSkipVideoSec=30&c2pWaitTime=10&csuuid=60da2bf1b403b&debugInfo=15083878_&debugPlayerSession=&pubUrlDEMO=&isAsyncDEMO=0&customPlaylistIdDEMO=&sta=15083878&showLogo=0&clkUrl=&plMult=-1&schedule=eyJwcmVfcm9sbCI6MSwibWlkX3JvbGwiOltdLCJnYXAiOiJhdXRvIn0%3D&content=plembed1817kuirwnoj&secondaryContent=&x=300&y=600&pubUrl=https%3A%2F%2Fissuu.com%2Fsanjaykumarguptaa%2Fdocs%2Fproject-report-on-e-commerce&contentNum=1&flow_closeBtn=0&flowCloseTimeout=0&flow_closeButtonPosition=right&flow_direction=bl&flow_horizontalOffset=10&flow_bottomOffset=100&impGap=1&flow_width=310&flow_height=260&videoType=normal&gdpr=0&gdprConsent=&contentFeedId=&geoLati=28.6542&geoLong=77.2373&vpTemplate=8457&flowMode=below&isRealPreroll=0&playerApiId=&isApp=0&ccpa=0&ccpaConsent=">\x3C/script>');
                        }
                        