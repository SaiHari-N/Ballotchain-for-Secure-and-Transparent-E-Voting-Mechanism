

**DEPARTMENT OF ELECTRONICS AND**

**COMMUNICATION ENGINEERING**

**BALLOTCHAIN FOR SECURE AND TRANSPARENT**

**E-VOTING MECHANISM**

**Date**

**:** 27.06.2022

**:** Final

**Review number**

**PRESENTED BY**

\1. CHANDRAKANTH V

\2. ESWARAN M

\- 622518106018

\- 622518106024

\- 622518106026

\- 622518106303

**GUIDED BY**

MR. LOGARASU R., B.E., M.S.

Associate Professor of ECE,

Selvam College Of Technology

\3. GOKULNATH M

\4. SAIHARIVIGNESH N





**ABSTRACT**

• This proposed system aims to facilitate the consolidation of AI ecosystems by developing a

blockchain-based traceable self-tallying e-voting system.

• It presents a novel voting system by using QR and Fingerprint of Aadhaar card.

• When the voting system is integrated with the Internet of Things, any eligible voter can vote from

any pool as there will be two or more levels of authenticity checks.

• The system permits the elector to cast their vote, block chain technology comes into existence that

is integrated within the machine.

2





**INTRODUCTION**

• Artificial intelligence (AI) has demonstrated huge potential in a variety of real-world applications.

• However, some significant considerations like fairness, transparency and trustworthiness are still

challenging when applying AI to trust-oriented applications such as E-voting.

• The technology can ensure the safety of every vote, better and faster and much more accurate

counting and automatic tallying.

3





**OBJECTIVE**

The main objective of the project is to cast the vote very safely and secure manner.

• Vote at Any booth

• QR Verification

• Fingerprint recognition to cast vote

• Blockchain enabled voting to avoid rigging

• Blockchain Traceability

• Counting

• Same day Announcement

4





**EXISTING SYSTEM**

• Current voting system is the conventional voting system built on ballot machine where the voter

are allow to cast their vote by pressing the button along with the symbol on the voting machine.

• Even if there is any way of voting through online, that won’t be secured enough to avoid any

threats and attacks.

• Still in some places around the world uses paper voting method which must be avoided to improve

the vote casting method and for convenience of people.

• Date of result announcement is varied from the date of election which can easily improve the

chance of cheating and other fraudulent activities.

5





**DISADVANTAGES**

• Paper-based voting system -

\1. Vast amount of time due to high risk factor

\2. Error prone

\3. Highly expensive

• Direct-Recording Electronic (DRE) voting system -

\1. Expense in cost

\2. They will still ultimately fail if there are substantial usability problems

• Rigging and fraudulent activities

• Counting Problem due to delay in result announcement as well as manual process

6





**PROPOSED SYSTEM**

• This proposed concept is a web-based system so basic features related with web-based

technologies such as client-server, database, image processing.

\1. QR based Aadhar Verification System

\2. Fingerprint Recognition System using DCNN

\3. Blockchain Integration

\4. Vote at any booth

\5. Counting at the end of the election day

7





**BASIC ARCHIETCTURE OF E-VOTING PROCESS**

8





**FUNCTIONAL OUTLINE**

• The principle of e-voting is to cast or count the votes using some electronic means and connect the

various participating entities via a secure mechanism so that any alteration with data or votes at any

level is easily detected.

• Another motive of smart e-voting technique is to provide a transparent and meddling-free election

process to the voters who are notiﬁed at each step as their votes are processed.

• The inconsistencies and redundancies in the voting process are successfully identiﬁed by replacing

article based mechanism with advanced IoT devices that are interconnected.

• The smart e-voting mechanism in addition to being secure and reliable also provides effective use

of resources and means.

9





**BLOCK DIAGRAM OF E-VOTING MACHINE AT END NODE**

10





**MICROCONTROLLER**

• The PIC16F887 is one of the latest products from Microchip.

• It features all the components which modern microcontrollers normally have.

• For its low price, wide range of applications, high quality and easy availability, it is an ideal

solution in applications such as to control different processes in industry, machine control devices,

measurement of different values etc.

• Here, this PIC controller is used to store and compare the user ’s thumb impression with

information in his/her Aadhar database.

11





**FINGER PRINT SCANNER**

• Finger print scanner is a type of technology that identifies and authenticates the fingerprints of an

individual in order to grant or deny access to a computer or a physical facility.

• When a fingerprint is entered into the system, only a template of the fingerprint is stored, not an

image of the fingerprint.

• The electrical signal created in response to the light hitting on the CCD forms pixels which are

collectively joined to form an image.

• These pixels are converted using and ADC to make a digital image.

• The scanning device consists of a glass plate, on top of which you are supposed to place your

finger and after the scanning takes place, an inverted image of the finger is stored and compared

with the database.

12





**BLUETOOTH**

• It is a standard for the short-range wireless interconnection of mobile phones, computers and other

electronic devices.

• When the fingerprint of the user is impressed, system has to compare it with the Aadhar database.

• In order to achieve that, first the QR code of the Aadhar card is scanned using QR code scanner

and then the scanned information is sent via Bluetooth to the kit.

13





**LCD - LIQUID CRYSTAL DISPLAY**

• It is an electronic display module and find a wide range of applications.

• This LCD has two registers which are command and data.

• The command register is used to store the command instruction given to LCD. This command is

used to do a predefined task like initializing it, clearing its screen, setting the cursor position,

controlling display etc.

• The data register stores the data to be displayed on the LCD. The ASCII value of the character

which is displayed in LCD can be stored in data register.

• LCD display produces a output based upon the voter ’s matched details with dataset and if the vote

casted promptly.

14





**BUZZER**

• A buzzer or beeper is an audio signaling device, which may be mechanical, electromechanical, or

piezoelectric.

• Typical uses of buzzers and beepers include alarm devices, timers and confirmation of user input

such as a mouse click or keystroke.

• Buzzer is an integrated structure of electronic transducers, DC power supply, widely used in

computers, printers, copiers, alarms, electronic toys, automotive electronic equipment, telephones,

timers and other electronic products for sound devices.

• The buzzer produces a sound indicating the success of match, if the voter ’s details are matched

with the dataset.

15





**ESP8266 WIFI MODULE**

• ESP8266 is an impressive, low cost Wi-Fi module suitable for adding Wi-Fi functionality to an

microcontroller via a UART serial connection.

• The module can even be programmed to act as a standalone Wi-Fi connected device.

• In this system, Wi-Fi is used to transfer the collection of votes to the server so that vote information

can be updated to the server.

16





**ALGORITHM**

• Initially, the Aadhar card is swiped in the Aadhar card module, which will extract the information

about the particular voter such as fingerprint and retinal data.

• The Aadhar card reader module is connected to the microcontroller unit, hence the obtained data

will be sent to the microcontroller and stored.

• The microcontroller (is connected to the central server where all information of Aadhar card

holders has been stored already) access the data stored in its memory by using the code written.

• Now the voter is subjected to finger print test where the finger print scanner will send the scanned

data to the server.

17





**ALGORITHM**

• The PIC microcontroller will compare the scanned data with the Aadhar card details in the server.

• If the details match, the microcontroller will send a signal to the LCD and the LCD displays a

message “DETAILS MATCHED READY TO VOTE! “ and also the buzzer produces a sound

indicating the success of match.

• After this, the system will create a temporary id and the voter is allowed to cast his/her vote. After

casting the vote, the LCD will display “VOTED SUCCESSFULLY, THANK YOU”.

• These are updated in the database, which makes it very much useful and easier at the time of

counting the votes.

18





**SECURITY AND TRANSPARENCY**

19





**INTERNET OF THINGS**

• **Input:** A network ’n’ consist of ’d’ number of IoT devices.

• **Output:** The IoT devices are either legitimate or malicious.

• **Case 1:** Compute IoT device trust by computing their weights then compute DDR, Malicious

devices and not be able to add in the blockchain.

• **Case 2:** E-voting process through legitimate IoT nodes, Not allowed to maintain Blockchain 1 and

Blockchain 2.

20





**BLOCKCHAIN**

• **Input:** The number of transactions/communications done by each node is maintained as

Blockchain.

• **Blockchain 1:**

It maintains a chain of all the records stored by national election commission, polling booths,

district and states.

• **Blockchain 2:**

It maintains a chain of all the voter ’s who casted their votes in order to ensure the

transparency among voter ’s counts.

21





**BENEFITS OF USING BLOCKCHAIN IN E-VOTING**

• The use of Blockchain in the proposed mechanism is a two end system, i.e. all the entities involved

have access to all the data of the Blockchain and the voter can track his/her vote.

• The major problem faced by election bodies that is being solved is the illegitimate registration of a

single voter in more than one state that has been countered by making the data visible to all the

state level and district level bodies via a Blockchain.

• The beneﬁt provided to the voter is that he/she is ensured that the vote has not been meddled with

and has been successfully counted via generation of notiﬁcations.

• The cases of meddling and infringement thus, being reduced enhance transparency in the voting

process and establish faith in the democratic institutions crucial for working of modern societies.

22





**PROCESS OF E-VOTING**

23





**STEP-BY-STEP PROGRESS**

• **Step 1:**

Initially when the voter casts a vote he/she is veriﬁed using his/her biometrics and is

provided with a unique secret key. The voter is highlighted in the database of all the entities

that the vote has been casted.

• **Step 2:**

If no intrusion or meddling with the vote takes place, the voter is notiﬁed on the counting

day that the vote has been successfully counted.

• **Step 3:**

In case any third party interferes with the vote already cast before the counting day, the voter

is immediately notiﬁed regarding the same.

24





**LEVEL WISE E-VOTING MECHANISM**

25





**WORKING PRINCIPLE**

• While working with smart systems particularly in healthcare and industries usually a permission

blockchain is implemented to protect the privacy of the data at various levels.

• However in e-voting systems a permission free blockchain is very important in order to avoid

meddling, rigging and maintain a free and fair election for modern democratic systems.

• In the proposed system model, a hierarchical architecture has been implemented which can be

understood at three levels.

• **Level 1:** Initially a Blockchain is setup by the NEC which is the supreme authority for

monitoring the elections for the entire country. The NECs direct and coordinate the activities

of State level Election Commissions which are responsible for smooth conduct of elections

within their boundaries.

26





**WORKING PRINCIPLE**

• **Level 2:** Next, the several district levels subsidiary election bodies of various states are added

to the Blockchain which manage the process of polling in the irrespective districts and report

to the SECs.

• **Level 3:** The ﬁnal level consists of the various polling booths located in a district where voters

cast their votes and when a voter casts a vote, a secret key is generated for each voter on the

basis of his/her biometrics and the same is displayed in the database of all the entities.

• When a voter ‘X’ successfully casts the vote, it is reﬂected in the Blockchain after the veriﬁcation

of his/her biometrics.

• Since the biometrics of the voter are checked before casting, any person trying to re-cast vote or try

to disrupt any IoT device in another district or state is immediately caught as it is already

highlighted in the database of all the parties involved at district and state level that the vote for

these biometrics has been casted instead of just the allotted polling booth.

27





**SYSTEM SPECIFICATION**

**Hardware Specification**

**Software Specification**

• PHP 5 or Python 3.2

• MySQL

• Processors: Intel® Core™ i5 processor

4300M at 2.60 GHz or 2.59 GHz (1

socket, 2 cores, 2 threads per core)

• 8 GB of DRAM

• WAMP Server 2.0

• Disk space: 320 GB

• Macromedia Dreamviewer 8 IDE

• Arduino IDE

• Operating systems: Windows® 10,

macOS\*, and Linux\*

28





**ADVANTAGES**

• Prevent duplicate registrations

• Provide a simple and user-friendly interface for registering and identifying voters

• Easily scalable

• Ensure quick and precise biometric voting identification

• Provide a clear and easily accessible audit trail

• Facilitate interoperability between government agencies for database consolidation and

maintenance

29





**CONCLUSION**

• The idea of adapting digital voting systems to make the public electoral process cheaper, faster

and easier, is a compelling one in modern society.

• Making the electoral process cheap and quick, normalizes it in the eyes of the voters, removes

a certain power barrier between the voter and the elected official and puts a certain amount of

pressure on the elected official.

• It also opens the door for a more direct form of democracy, allowing voters to express their

will on individual bills and propositions.

• In this project, we introduced a unique, blockchain-based electronic voting system that utilizes

smart contracts to enable secure and cost-efficient election while guaranteeing voters privacy.

• We have outlined the systems architecture, the design, and a security analysis of the system.

30





**LITERATURE SURVEY**

**AUTHOR & YEAR OF**

**PUBLISHING**

**ADVANTAGES /**

**TECHNIQUES**

**S.NO.**

\1.

**TITLE**

**DISADVANTAGES**

The future of E- P. Tarasov and H. Tewari, Internet

of

Things Less security and

easily hackable.

voting

2017

enabled voting

Blockchain-

enabled E-voting

N. Kshetri and J. Voas, Blockchain based voting Delay

2018 method publishing

in

result

\2.

Blockchain-based F. P. Hjálmarsson, G. K. Blockchain based high Usage of Aadhar is

E-voting system Hreigarsson, M. Hamdaqa, security enabled not possible because

\3.

and G. Hjálmtýsson, 2018 encrypted voting method of high security threat.

31





**REFERENCES**

\1. X. Yang, X. Yi, S. Nepal, A. Kelarev, and F. Han, ``A secure verifiable ranked choice online

voting system based on homomorphic encryption,‘’ IEEE Access, vol. 6, pp. 20506-20519,

\2018.

\2. A. Qureshi, D. Megías, and H. Rifà-Pous, ``SeVEP: Secure and verifiable electronic polling

system,'' IEEE Access, vol. 7, pp. 19266-9290, 2019.

\3. S. Gao, D. Zheng, R. Guo, C. Jing, and C. Hu, ``An anti-quantum E-voting protocol in

blockchain with audit function,'' IEEE Access, vol. 7, pp. 115304-115316, 2019.

32

