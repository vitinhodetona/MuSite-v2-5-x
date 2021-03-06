USE [webSite]
GO
/****** Object:  Table [dbo].[webNoticesComments]    Script Date: 04/21/2010 18:21:25 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[webNoticesComments](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[idNotice] [smallint] NOT NULL,
	[username] [varchar](10) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL,
	[comment] [text] COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL,
	[datePost] [varchar](10) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL,
	[remoteAddr] [varchar](15) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]

GO
SET ANSI_PADDING OFF